<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('project', ChoiceType::class, [
                'label' => 'Quel est votre projet ?',
                'choices' => [
                    'Auto' => 'car',
                    'Travaux' => 'renovationWork',
                    'Prêt personnel' => 'personnalLoan',
                    'Crédit renouvelable' => 'revolvingCredit'
                ],
                'expanded' => true,
                'multiple' => false
            ]);
    }
}
