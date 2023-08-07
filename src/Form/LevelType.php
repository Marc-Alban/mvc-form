<?php
// src/Form/Type/LevelType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LevelType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Débutant' => 'beginner',
                'Intermédiaire' => 'intermediate',
                'Confirmé' => 'confirmate',
                'Expert' => 'expert'
            ],
            'label' => 'Quel est votre niveau de connaissance dans le crédit ?'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
