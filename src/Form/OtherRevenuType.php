<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class OtherRevenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rentalIncome', NumberType::class, [
                'label' => 'Revenus locatifs'
            ])
            ->add('otherHouseholdIncome', NumberType::class, [
                'label' => 'Autres revenus du foyer'
            ])
            ->add('benefitAmount', NumberType::class, [
                'label' => 'Montant des allocations'
            ])
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }
}
