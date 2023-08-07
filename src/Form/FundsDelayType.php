<?php

// src/Form/Type/FundsDelayType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FundsDelayType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Immédiatement' => 'now',
                'Dans un délai d\'un mois' => '1month',
                'Dans un délai > à un mois' => '+1month'
            ],
            'label' => 'Quand souhaitez-vous obtenir les fonds ?'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
