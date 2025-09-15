<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Services\EquipeComponent;
use Illuminate\Support\Facades\Storage;

class EquipeController extends Controller
{
    public function getTeamsActive(EquipeComponent $equipeComponent)
    {
        $equipes = $equipeComponent->equipes();
        return view("pages.equipes", compact("equipes"));
    }
    public function getAllTeams()
    {
        $teams = Team::latest()->get();
        return view("admin.equipe.list", compact("teams"));
    }
    public function new()
    {
        $team = [];
        return view("admin.equipe.new_team", compact("team"));
    }

    public function store(TeamRequest $request, EquipeComponent $equipeComponent)
    {
        Team::create($equipeComponent->readyToStore($request->validated()));
        return redirect()->route("equipe.liste")->with("success", "Nouvelle équipe enregistré avec succès");
    }

    public function edit(Team $team)
    {
        return view("admin.equipe.maj_team", compact("team"));
    }

    public function update(TeamRequest $request, EquipeComponent $equipeComponent, Team $team)
    {
        Storage::disk("public")->delete($team->avatar);
        $team->update($equipeComponent->readyToStore($request->validated()));
        return redirect()->route("equipe.liste")->with("success", "Infos d'équipe enregistré avec succès");
    }

     public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back()->with("success", "Equipe supprimée avec succèss");
    }
}
