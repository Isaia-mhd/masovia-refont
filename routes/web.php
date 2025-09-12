<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProcessusController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\TemoignageController;
use App\Services\EquipeComponent;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\ServiceCollectionInterface;

// Route::get('/', function () { return view('welcome'); })->name("home");
Route::view("/", "pages/accueil")->name("accueil");
Route::view("/apropos", "pages/apropos")->name("apropos");
Route::get("/services", [ServiceController::class, "items"])->name("services");
Route::get("/processus", [ProcessusController::class, "getAllProcess"])->name("processus");
Route::view("/technologies", "technologies")->name("technologies");
Route::get("/tarifs", [TarifController::class, "getAllTarifs"])->name("tarifs");
Route::get("/temoignages", [TemoignageController::class, "getAllTestimony"])->name("temoignages");
Route::get("/equipes", [EquipeController::class, "getTeams"])->name("equipes");
Route::get("/projets", [ProjetController::class, "getAllProjects"])->name("projets");
Route::get("/contactez-nous", [ContactController::class, "contact"])->name("contact");



