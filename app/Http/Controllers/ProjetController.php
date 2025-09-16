<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Services\ProjetsComponent;
use Exception;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    public function getAllProjectsActive(ProjetsComponent $projetsComponent)
    {
        $projets = $projetsComponent->projects();
        return view('pages.projets', compact('projets'));
    }
    public function getAllProjects()
    {
        $projects = Project::latest()->get();
        return view("admin.projet.list", compact("projects"));
    }
    public function new()
    {
        return view("admin.projet.new_projet");
    }

    public function store(ProjectRequest $request, ProjetsComponent $projetComponent)
    {
        Project::create($projetComponent->readyToStore($request->validated()));
        return redirect()->route("projet.liste")->with("success", "Nouveau projet enregistré avec succès");
    }

    public function edit(Project $project)
    {
        return view("admin.projet.maj_projet", compact("project"));
    }

    public function update(ProjectRequest $request, ProjetsComponent $projectComponent, Project $project)
    {
        Storage::disk("public")->delete($project->image);
        $project->update($projectComponent->readyToStore($request->validated()));
        return redirect()->route("projet.liste")->with("success", "Infos du projet enregistré avec succès");
    }

    public function destroy(Project $project)
    {
        $project->delete();
       return redirect()->back()->with("success", "Projet supprimée avec succèss");
    }
}
