<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\Type\FundsDelayType;
use App\Form\Type\LevelType;
use App\Form\Type\AssuranceType;

class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', NumberType::class, [
                'label' => 'Montant de crédit souhaité'
            ])
            ->add('duration', NumberType::class, [
                'label' => 'Durée de remboursement souhaitée (années)'
            ])
            ->add('fundsDelay', FundsDelayType::class)
            ->add('level', LevelType::class)
            ->add('assurance', AssuranceType::class)
            ->add('submit', SubmitType::class, ['label' => 'Suivant']);
    }
}
