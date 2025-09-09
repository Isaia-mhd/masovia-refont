<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); })->name("home");
Route::view("/", "pages/accueil")->name("accueil");
Route::view("/apropos", "pages/apropos")->name("apropos");
Route::view("/services", "services")->name("services");
Route::view("/processus", "processus")->name("processus");
Route::view("/technologies", "technologies")->name("technologies");
Route::view("/processus", "processus")->name("processus");
Route::view("/tarifs", "tarifs")->name("tarifs");
Route::view("/temoignages", "temoignages")->name("temoignages");
Route::view("/equipes", "equipes")->name("equipes");
Route::view("/projets", "projets")->name("projets");
Route::view("/contactez-nous", "contact")->name("contact");



