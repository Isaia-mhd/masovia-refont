<?php

namespace App\Http\Controllers;

use App\Services\ProjetsComponent;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function getAllProjects(ProjetsComponent $projetsComponent)
    {
        $projets = $projetsComponent->projects();
        return view('pages.projets', compact('projets'));
    }
}
