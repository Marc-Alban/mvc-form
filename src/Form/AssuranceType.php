<?php
// src/Form/Type/AssuranceType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AssuranceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Décès, invalidité, Arrêt de travail, Perte d\'emploi' => 'OUI',
                'Je refuse l\'assurance proposé' => 'NON'
            ],
            'label' => 'Je choisis mon option d\'assurance ?'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
