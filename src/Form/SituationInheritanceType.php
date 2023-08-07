<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class SituationInheritanceType extends AbstractType
{

    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $years = range(date('Y'), date('Y') - 100);
        $builder
            ->add('estateStatus', ChoiceType::class, [
                'label' => 'Quel est votre statut ?',
                'choices' => [
                    'Propriétaire' => 'owner',
                    'Locataire' => 'tenant',
                    'Hébergé' => 'lodged'
                ],
                'placeholder' => 'Sélectionner'
            ])
            ->add('yearStatut', ChoiceType::class, [
                'label' => 'Depuis quelle date ?',
                'choices' => array_combine($years, $years), // This will create an associative array with keys and values being the same
                'placeholder' => 'Sélectionner'
            ]);
    }
}
