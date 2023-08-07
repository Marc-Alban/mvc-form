<?php
// src/Form/Type/ProfessionalContractType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfessionalContractType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => 'Contrat',
            'choices' => [  
                'Sélectionner' => '',
                'CDI période d\'essai terminée' => 'CDITrialPeriodEnded',
                'CDI période d’essai non terminée' => 'CDITrialPeriodNotEnded',
                'CDD' => 'temporaryContract',
                'Stages' => 'TRAINEESHIP',
                'INTERIM' => 'INTERIM',
                'Autre' => 'other'
            ],
            'placeholder' => 'Sélectionner'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
