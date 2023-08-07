<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MaritalStatusCoType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilityGenderCo', ChoiceType::class, [
                'label' => 'Civilité',
                'choices' => [
                    'Sélectionner' => '',
                    'M.' => 'mr',
                    'Mme' => 'mrs'
                ]
            ])
            ->add('civilityLastnameCo', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('civilityFirstnameCo', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('civilityNationalityCo', TextType::class, [
                'label' => 'Pays de naissance'
            ])
            ->add('civilityCityCo', TextType::class, [
                'label' => 'Ville de naissance'
            ])
            ->add('civilityBirthDateCo', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
                'years' => range(date('Y') - 100, date('Y'))
            ])
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }

}
