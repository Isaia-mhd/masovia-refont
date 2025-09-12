<?php
namespace App\Services;

class TechComponent{
    public function technos()
    {
        return [
            [
                "name" => "Bootstrap",
                "description" => "Un framework CSS qui aide à créer rapidement des sites web responsives grâce à des composants et un système de grille prêts à l’emploi.",
                "image" => "/images/technos/bootstrap.png",
                 "cross" => true
            ],
            [
                "name" => "Shopify",
                "description" => "Une plateforme e-commerce pour créer et gérer une boutique en ligne avec outils de vente intégrés.",
                "image" => "/images/technos/shopify.png",
                 "cross" => true
            ],
            [
                "name" => "Wordpress",
                "description" => "Un système de gestion de contenu (CMS) qui permet de créer et personnaliser facilement des sites web ou blogs, avec de nombreux thèmes et extensions.",
                "image" => "/images/technos/wordpress.png",
                 "cross" => false
            ],
            [
                "name" => "Laravel",
                "description" => "Un framework PHP qui facilite le développement d’applications web grâce à une structure claire, des outils intégrés et une syntaxe élégante.",
                "image" => "/images/technos/laravel.png",
                 "cross" => true
            ],
            [
                "name" => "Odoo",
                "description" => "Une plateforme intégrée pour gérer plusieurs aspects d’une entreprise, comme les ventes et la comptabilité.",
                "image" => "/images/technos/odoo.png",
                 "cross" => true
            ],
            [
                "name" => "HTML",
                "description" => "Un langage fondamental utilisé pour créer et structurer le contenu des pages web, comme les textes, images, liens et sections.",
                "image" => "/images/technos/html.png",
                 "cross" => false
            ],
            [
                "name" => "CSS",
                "description" => "C’est un langage qui définit le style des pages web : couleurs, polices, tailles et dispositions, pour rendre le contenu visuellement agréable et adapté à tous les écrans.",
                "image" => "/images/technos/css.png",
                 "cross" => true
            ],
            [
                "name" => "NodeJs",
                "description" => "C’est un environnement qui permet d’exécuter du JavaScript côté serveur, offrant la possibilité de créer des applications rapides et évolutives.",
                "image" => "/images/technos/node.png",
                 "cross" => true
            ],
            [
                "name" => "JavaScript",
                "description" => "C’est un langage de programmation qui rend les pages web interactives, en permettant de manipuler le contenu, réagir aux actions de l’utilisateur et communiquer avec un serveur.",
                "image" => "/images/technos/javascript.png",
                 "cross" => false
            ],
            [
                "name" => "MySQL",
                "description" => "MySQL est un système de gestion de base de données relationnelle qui permet de stocker, organiser et interroger efficacement des informations.",
                "image" => "/images/technos/mysql.png",
                 "cross" => true
            ],
            [
                "name" => "PHP",
                "description" => "Le PHP est un langage de programmation côté serveur utilisé pour créer des pages web dynamiques et interagir avec des bases de données.",
                "image" => "/images/technos/php.png",
                 "cross" => true
            ],
            [
                "name" => "Flutter",
                "description" => "Flutter est un framework développé par Google qui permet de créer des applications mobiles, web et desktop avec une seule base de code, utilisant le langage Dart.",
                "image" => "/images/technos/flutter.png",
                 "cross" => false
            ],
            [
                "name" => "ReactJS",
                "description" => "C’est une bibliothèque JavaScript qui facilite la création d’interfaces web interactives grâce à des composants réutilisables et une gestion efficace de l’affichage.",
                "image" => "/images/technos/react.png",
                 "cross" => false
            ],
            [
                "name" => "Angular",
                "description" => "C’est un framework JavaScript puissant développé par Google, conçu pour créer des applications web complètes avec des outils intégrés comme le routage et la gestion des données.",
                "image" => "/images/technos/angular.png",
                "cross" => false
            ],
            [
                "name" => "Figma",
                "description" => "C’est un outil de design en ligne qui permet de créer des maquettes d’interface utilisateur collaboratives. Il facilite le travail en équipe grâce à son accès en temps réel et ne nécessite pas d’installation.",
                "image" => "/images/technos/figma.png",
                 "cross" => false
            ],
        ];
    }
}
