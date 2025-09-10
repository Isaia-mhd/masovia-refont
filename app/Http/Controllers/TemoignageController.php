<?php

namespace App\Http\Controllers;

use App\Services\TemoignagesComponent;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function getAllTestimony(TemoignagesComponent $temoignagesComponent)
    {
        $temoignages = $temoignagesComponent->temoignages();
        return view("pages.temoignages", compact("temoignages"));
    }
}
