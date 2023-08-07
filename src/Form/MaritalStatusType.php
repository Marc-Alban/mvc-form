<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MaritalStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilityGender', ChoiceType::class, [
                'label' => 'Civilité',
                'choices' => [
                    'M.' => 'mr',
                    'Mme' => 'mrs'
                ]
            ])
            ->add('civilityLastname', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('civilityFirstname', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('civilityNationality', TextType::class, [
                'label' => 'Pays de naissance'
            ])
            ->add('civilityCity', TextType::class, [
                'label' => 'Ville de naissance'
            ])
            ->add('civilityBirthDate', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
                'years' => range(date('Y') - 100, date('Y'))
            ])
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }
}
