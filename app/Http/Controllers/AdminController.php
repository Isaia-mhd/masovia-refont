<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $equipes = Team::all();
        $projets = Project::all();
        return view("admin.dashboard", compact("equipes", "projets"));
    }
}
