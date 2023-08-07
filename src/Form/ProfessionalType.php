<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfessionalType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                // Vos choix pour le type professionnel ici
            ],
            'placeholder' => 'Sélectionner'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
