<?php
// src/Form/Type/BankType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BankNameType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Sélectionner' => '',
                'BNP' => 'BNP',
                'Banque populaire' => 'BANQUE POPULAIRE',
                'Crédit agricole' => 'CREDIT AGRICOLE',
                'CCP' => 'CCP',
                'Caisse d\'épargne' => 'CAISSE D EPARGNE',
                'Crédit lyonnais' => 'CREDIT LYONNAIS',
                'Crédit mutuel' => 'CREDIT MUTUEL',
                'Société générale' => 'SOCIETE GENERALE',
                'Autre' => 'AUTRE',
                'Pas de banque' => 'PAS DE BANQUE'
            ],
            'label' => 'Quelle est votre banque ?'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
