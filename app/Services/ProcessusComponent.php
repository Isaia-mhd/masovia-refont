<?php
namespace App\Services;

class ProcessusComponent
{
    public function getItemsOfProcessus()
    {
        return [
            [
                'id' => 1,
                'processus' => 'Cadrage fonctionnel',
                'description' => 'On échange avec le client pour cerner ses besoins, définir les fonctionnalités et fixer le périmètre du projet avec ses contraintes et ressources.',
                'icon' => '/images/process/cadrage_fonctionnel.png',
            ],
            [
                'id' => 2,
                'processus' => 'Préconception',
                'description' => 'On conçoit l’architecture globale de l’application, puis on définit l’interface et l’expérience utilisateur.  Enfin, on rédige une première version du cahier des charges.',
                'icon' => '/images/process/preconception.png',
            ],
            [
                'id' => 3,
                'processus' => 'Validation concept',
                'description' => 'La conception initiale est soumise au client pour approbation.  Les commentaires du client sont pris en compte afin de modifier le projet si nécessaire.',
                'icon' => '/images/process/validation_concept.png',
            ],
            [
                'id' => 4,
                'processus' => 'Prévision',
                'description' => 'Nous avons conçu un plan de projet avec les délais et ressources nécessaires. Nous avons aussi estimé les coûts pour établir un budget précis.',
                'icon' => '/images/process/prevision.png',
            ],
            [
                'id' => 5,
                'processus' => 'Développement',
                'description' => 'Concevoir l’interface utilisateur et implémenter les fonctionnalités approuvées.',
                'icon' => '/images/process/developpement.png',
            ],
            [
                'id' => 6,
                'processus' => 'Tests',
                'description' => 'Nous effectuons divers tests pour assurer la qualité, tout en garantissant la sécurité et la gestion des erreurs.',
                'icon' => '/images/process/tests.png',
            ],
            [
                'id' => 7,
                'processus' => 'Déploiement',
                'description' => 'Nous préparons l’environnement de production pour déployer l’application sur les serveurs ou plateformes mobiles, garantissant ainsi sa stabilité et sa disponibilité.',
                'icon' => '/images/process/deploiement.png',
            ],
            [
                'id' => 8,
                'processus' => 'Mise à disposition',
                'description' => 'Nous livrons la version finale de l’application au client et l’accompagnons durant la phase de transition pour assurer une prise en main autonome réussie.',
                'icon' => '/images/process/mise_a_disposition.png',
            ],
            [
                'id' => 9,
                'processus' => 'Entretien',
                'description' => 'Nous surveillons les performances de l’application en production et appliquons les correctifs ainsi que les mises à jour selon les retours utilisateurs et les besoins évolutifs.',
                'icon' => '/images/process/entretien.png',
            ]
        ];
    }
}
