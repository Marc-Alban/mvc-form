<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ChargeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('totalMensualitesCreditConso', NumberType::class, [
                'label' => 'Total mensualités crédit conso',
                'attr' => [
                    'class' => 'montantConso'
                ]
            ])
            ->add('totalImmoCreditConso', NumberType::class, [
                'label' => 'Total mensualités crédit immobilier',
                'attr' => [
                    'class' => 'montantConso'
                ]
            ])
            ->add('rent', NumberType::class, [
                'label' => 'Loyer',
                'attr' => [
                    'class' => 'montantConso'
                ]
            ])
            ->add('next', SubmitType::class, ['label' => 'Suivant'])
            ->add('previous', SubmitType::class, ['label' => 'Précédent']);
    }
}
