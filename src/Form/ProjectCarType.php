<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectCarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('carType', ChoiceType::class, [
                'label' => 'Quel est le type de véhicule que vous souhaitez vous offrir ?',
                'choices' => [
                    'Auto' => 'car',
                    'Moto' => 'moto',
                    'Camping-car' => 'camper',
                    'Caravane' => 'caravan',
                    'Autre' => 'other'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('carState', ChoiceType::class, [
                'label' => "Quel est l'état du véhicule ?",
                'choices' => [
                    'Neuf' => 'new',
                    'Occasion de - de 2 ans' => '-2years',
                    'Occasion de + de 2 ans' => '+2years'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('carBrand', ChoiceType::class, [
                'label' => 'Quel est le modèle du véhicule ?',
                'choices' => [
                    'Renault' => 'Renault',
                    'Citroën' => 'Citroën',
                    'Peugeot' => 'Peugeot',
                    'Volkswagen' => 'Volkswagen'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }
}
