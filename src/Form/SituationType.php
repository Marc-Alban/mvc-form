<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $days = range(1, 31);
$months = [
    'Janvier' => '01',
    'Février' => '02',
    'Mars' => '03',
    'Avril' => '04',
    'Mai' => '05',
    'Juin' => '06',
    'Juillet' => '07',
    'Août' => '08',
    'Septembre' => '09',
    'Octobre' => '10',
    'Novembre' => '11',
    'Décembre' => '12'
];
$years = range(date('Y'), date('Y') - 100);

        $builder
            ->add('maritalStatus', ChoiceType::class, [
                'label' => 'Votre situation personnelle',
                'choices' => [
                    'Mariée' => 'maried',
                    'Célibataire' => 'single',
                    'Veuf(ve)' => 'widow',
                    'Divorcé(e)' => 'divorced',
                    'Pacsé(e)' => 'civilPartnership',
                    'Union libre' => 'unmarried',
                    'En instance de divorce' => 'pendingDivorce'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('daySituation', ChoiceType::class, [
                'choices' => array_combine($days, $days),
                'placeholder' => 'Jour'
            ])
            ->add('monthSituation', ChoiceType::class, [
                'choices' => $months,
                'placeholder' => 'Mois'
            ])
            ->add('yearSituation', ChoiceType::class, [
                'choices' => array_combine($years, $years),
                'placeholder' => 'Année'
            ])
            ->add('enfant', NumberType::class, [
                'label' => 'Enfant(s) à charge',
                'attr' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 1,
                    'value' => 0
                ]
            ]);
    }
}
