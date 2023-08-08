<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfessionalType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                // Vos choix pour le type professionnel ici
               "01" =>	"Propriétaire agricole",
               "02" =>	"Ouvrier agricole",
               "10" =>	"Commerçant",
               "15" =>	"Artisan",
               "19" =>	"Forain",
               "20" =>	"Profession libérale ",
               "21" =>	"Rentiers immobilier",
               "25" =>	"VRP sans fixe",
               "28" =>	"Cadre moyen médical",
               "29" =>	"Profession libérale médicale et paramédicale",
               "30" =>	"Cadre supérieur privé",
               "31" =>	"Cadre moyen secteur privé",
               "40" =>	"Cadre supérieur public et professeur",
               "41" =>	"Cadre moyen public – instituteur",
               "48" =>	"Infirmière et profession paramédicale",
               "50" =>	"Technicien",
               "51" =>	"Contremaître secteur privé – agent de maîtrise",
               "55" =>	"Ingénieur",
               "60" =>	"Employé de bureau",
               "63" =>	"Représentant salarié",
               "64" =>	"Vendeur – caissier de magasin",
               "66" =>	"Employé de commerce",
               "68" =>	"Employé de garage - apporteurs",
               "70" =>	"Employé et agent administratif",
               "71" =>	"Aide soignant hospitalier",
               "72" =>	"Agent de service public",
               "73" =>	"Ouvrier d’état",
               "74" =>	"Agent Public",
               "80" =>	"Ouvrier",
               "81" =>	"Chauffeur et livreur",
               "85" =>	"Agent de sécurité",
               "86" =>	"Assistante maternelle – employé de maison",
               "89" =>	"Etudiant",
               "90" =>	"Retraité secteur privé",
               "91" =>	"Retraité secteur public",
               "92" =>	"Demandeur d’emploi",
               "93" =>	"Interimaire + 12 mois",
               "94" =>	"Invalide - Pensionné",
               "95" =>	"Divers",
               "96" =>	"Temporaire et Interimaire",
               "97" =>	"Dirigeant de société",
               "98" =>	"Inactif - Sans profession – sans emploi",
               "99" =>	"Indéterminé"
            ],
            'placeholder' => 'Sélectionner'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
