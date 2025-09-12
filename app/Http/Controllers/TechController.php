<?php

namespace App\Http\Controllers;

use App\Services\TechComponent;
use Illuminate\Http\Request;

class TechController extends Controller
{
    public function techno(TechComponent $techComponent)
    {
        $techs = $techComponent->technos();
        return view("pages.tech", compact("techs"));
    }
}
