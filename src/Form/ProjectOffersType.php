<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectOffersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('projectType', ChoiceType::class, [
                'label' => 'Que souhaitez-vous vous offrir ?',
                'choices' => [
                    'Électroménager' => 'appliances',
                    'Multimédia' => 'multimedia',
                    'Mobilier' => 'furniture',
                    'Vacances et loisir' => 'vacation-leisure',
                    'Mariage' => 'wedding',
                    'Études' => 'study',
                    'Trésorerie' => 'treasury',
                    'Autres' => 'others'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }
}
