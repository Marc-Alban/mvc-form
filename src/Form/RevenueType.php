<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class RevenueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('incomeBeforeTax', NumberType::class, [
                'label' => 'Vos revenus nets avant impôt',
                'attr' => [
                    'class' => 'montantConso',
                    'oninput' => "this.className = ''"
                ]
            ])
            ->add('incomeBeforeTaxCo', NumberType::class, [
                'label' => 'Revenu nets avant impôt du co-emprunteur',
                'attr' => [
                    'class' => 'montantConso',
                    'oninput' => "this.className = ''"
                ]
            ]);
    }
}
