<?php

namespace App\Http\Controllers;

use App\Services\TarifComponent;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function getAllTarifs(TarifComponent $tarifComponent)
    {
        $tarifs = $tarifComponent->tarifs();
        return view("pages.tarifs", compact("tarifs"));
    }
}
