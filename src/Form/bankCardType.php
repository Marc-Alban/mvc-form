<?php
// src/Form/Type/BankCardType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BankCardType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Sélectionner' => '',
                'Cb' => 'blueCard',
                'Visa' => 'visa',
                'Mastercard' => 'mastercard',
                'Gold' => 'gold',
                'Premier' => 'premier',
                'American Express' => 'ae',
                'Sans Carte' => 'sc'
            ],
            'label' => 'Quelle est votre carte bancaire ?'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
