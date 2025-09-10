<?php
namespace App\Services;

class ServicesComponent{
    public function getItemsOfServices()
    {
        return  [
            [
                "service" => "Développement Web",
                "description" => "Sites et applis web performants et sécurisés.",
                "icon" => "/images/services/service_devweb.png"
            ],
            [
                "service" => "Développement Mobile",
                "description" => "Applis mobiles intuitives iOS et Android.",
                "icon" => "/images/services/service_devmobile.png"
            ],
            [
                "service" => "UI/UX Design",
                "description" => "Interfaces ergonomiques et attrayantes.",
                "icon" => "/images/services/service_design.png"
            ],
            [
                "service" => "Administration réseau et système",
                "description" => "Gestion et sécurité IT fiables.",
                "icon" => "/images/services/service_reseau.png"
            ]
        ];
    }
}
