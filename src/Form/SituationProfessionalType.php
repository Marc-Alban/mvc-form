<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SituationProfessionalType extends AbstractType
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
            ->add('professionalSector', ProfessionalSectorType::class, [
                'label' => 'Secteur d\'activité'
            ])
            ->add('professionalType', ProfessionalType::class, [
                'label' => 'Situation professionnelle'
            ])
            ->add('professionalContractType', ProfessionalContractType::class, [
                'label' => 'Contrat'
            ])
            ->add('profession', TextType::class, [
                'label' => 'Profession'
            ])
            ->add('daySecteur', ChoiceType::class, [
                'choices' => array_combine($days, $days),
                'placeholder' => 'Jour'
            ])
            ->add('monthSecteur', ChoiceType::class, [
                'choices' => $months,
                'placeholder' => 'Mois'
            ])
            ->add('yearSecteur', ChoiceType::class, [
                'choices' => array_combine($years, $years),
                'placeholder' => 'Année'
            ]);
    }
}
