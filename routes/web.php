<?php

use App\Http\Controllers\ProcessusController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\ServiceCollectionInterface;

// Route::get('/', function () { return view('welcome'); })->name("home");
Route::view("/", "pages/accueil")->name("accueil");
Route::view("/apropos", "pages/apropos")->name("apropos");
Route::get("/services", [ServiceController::class, "items"])->name("services");
Route::get("/processus", [ProcessusController::class, "getAllProcess"])->name("processus");
Route::view("/technologies", "technologies")->name("technologies");
Route::view("/tarifs", "tarifs")->name("tarifs");
Route::view("/temoignages", "temoignages")->name("temoignages");
Route::view("/equipes", "equipes")->name("equipes");
Route::view("/projets", "projets")->name("projets");
Route::view("/contactez-nous", "contact")->name("contact");



