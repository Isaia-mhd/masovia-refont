<?php
namespace App\Services;

class ServicesComponent{
    public function getItemsOfServices()
    {
        return  [
            [
                "service" => "Développement Web",
                "description" => "Sites et applis web performants et sécurisés.",
                "icon" => "/images/service_devweb.png"
            ],
            [
                "service" => "Développement Mobile",
                "description" => "Applis mobiles intuitives iOS et Android.",
                "icon" => "/images/service_devmobile.png"
            ],
            [
                "service" => "UI/UX Design",
                "description" => "Interfaces ergonomiques et attrayantes.",
                "icon" => "/images/service_design.png"
            ],
            [
                "service" => "Administration réseau et système",
                "description" => "Gestion et sécurité IT fiables.",
                "icon" => "/images/service_reseau.png"
            ]
        ];
    }
}
