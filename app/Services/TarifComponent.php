<?php
namespace App\Services;

class TarifComponent{
    public function tarifs()
    {
        return [
            [
                "category" => "Etudiant",
                "description" => "Conception initiale simple pour lancer votre projet rapidement.",
                "type" => [
                    "month" => 50,
                    "year" => 600
                ],
                "baseTask" => [
                    "Conception initiale simple",
                    "Nombre limité de révisions (ex. 2)",
                    "Livraison en 1 à 2 semaines",
                    "Support par email uniquement",
                    "Fonctionnalités de base incluses"
                ],

            ],
            [
                "category" => "Pro",
                "description" => "Conception avancée avec fonctionnalités complètes et accompagnement expert.",
                "type" => [
                    "month" => 120,
                    "year" => 1440
                ],
                "baseTask" => [
                    "Conception avancée",
                    "Jusqu’à 5 révisions incluses",
                    "Livraison rapide en 1 semaine",
                    "Support par email et chat en direct",
                    "Fonctions avancées intégrées"
                ],

            ],
            [
                "category" => "Entreprise",
                "description" => "Solution sur mesure, optimisée pour les besoins complexes et la scalabilité.",
                "type" => [
                    "month" => 300,
                    "year" => 3600
                ],
                "baseTask" => [
                    "Solution entièrement personnalisée",
                    "Révisions illimitées",
                    "Livraison prioritaire",
                    "Support 24/7 multicanal",
                    "Intégration complète"
                ],

            ],
        ];
    }
}
