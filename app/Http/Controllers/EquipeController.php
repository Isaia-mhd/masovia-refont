<?php

namespace App\Http\Controllers;

use App\Services\EquipeComponent;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function getTeams(EquipeComponent $equipeComponent)
    {
        $equipes = $equipeComponent->equipes();
        return view("pages.equipes", compact("equipes"));
    }
}
