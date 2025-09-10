<?php
namespace App\Services;

class TemoignagesComponent{
    public function temoignages()
    {
        return [
            [
                "id" => 1,
                "role" => "Manager",
                "name" => "Andry Rakotoarisoa",
                "message" => "Grâce à leur expertise, notre projet IT a été conçu parfaitement, répondant à toutes nos attentes."
            ],
            [
                "id" => 2,
                "role" => "Directeur de vente",
                "name" => "Faly Razafindrakoto",
                "message" => " Une équipe professionnelle qui a transformé notre vision en une solution digitale efficace et intuitive."
            ],
            [
                "id" => 3,
                "role" => "CEO",
                "name" => "Miora Rasoanaivo",
                "message" => "Le résultat final a dépassé nos espérances, avec un design et une fonctionnalité optimaux."
            ],
        ];
    }
}
