<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProcessusController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\TemoignageController;
use Illuminate\Support\Facades\Route;

Route::view("/", "pages/accueil")->name("accueil");
Route::view("/apropos", "pages/apropos")->name("apropos");
Route::get("/services", [ServiceController::class, "items"])->name("services");
Route::get("/processus", [ProcessusController::class, "getAllProcess"])->name("processus");
Route::get("/technologies", [TechController::class, "techno"])->name("technologies");
Route::get("/tarifs", [TarifController::class, "getAllTarifs"])->name("tarifs");
Route::get("/temoignages", [TemoignageController::class, "getAllTestimony"])->name("temoignages");
Route::get("/equipes", [EquipeController::class, "getTeamsActive"])->name("equipes");
Route::get("/projets", [ProjetController::class, "getAllProjectsActive"])->name("projets");
Route::get("/contactez-nous", [ContactController::class, "contact"])->name("contact");
Route::post("/email", [ContactController::class, "sendMail"])->name("email");

Route::prefix("admin")->group(function(){
    Route::get("/equipe", [EquipeController::class, "getAllTeams"])->name("equipe.liste");
    Route::get("/equipe/nouveau", [EquipeController::class, "new"])->name("equipe.nouveau");
    Route::post("/equipe/nouveau", [EquipeController::class, "store"])->name("equipe.enregistre");
    Route::get("/equipe/{team}/modifier", [EquipeController::class, "edit"])->name("equipe.modifier");
    Route::put("/equipe/{team}", [EquipeController::class, "update"])->name("equipe.maj");
    Route::delete("/equipe/{team}/supprime", [EquipeController::class, "store"])->name("equipe.supprime");


    Route::get("/projet", [ProjetController::class, "getAllProjects"])->name("projet.liste");
    Route::get("/projet/nouveau", [ProjetController::class, "new"])->name("projet.nouveau");
    Route::post("/projet/nouveau", [ProjetController::class, "store"])->name("projet.enregistre");
    Route::get("/projet/{project}/modifier", [ProjetController::class, "edit"])->name("projet.modifier");
    Route::put("/projet/{project}", [ProjetController::class, "update"])->name("projet.maj");
    Route::delete("/projet/{project}/supprime", [ProjetController::class, "destroy"])->name("projet.supprime");

});
