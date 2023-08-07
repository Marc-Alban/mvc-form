<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfessionalSectorType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Secteur public' => 'publicSector',
                'Secteur privé' => 'privateSector',
                'Secteur agricole' => 'agriculturalSector',
                'Secteur Artisans - commerçants' => 'artisansCommercantSector',
                'Professions libérales' => 'liberalPprofessionsSector',
                'Retraité ou autres' => 'RetiredOrothersSector'
            ],
            'placeholder' => 'Sélectionner'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
