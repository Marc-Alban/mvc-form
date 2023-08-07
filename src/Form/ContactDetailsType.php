<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', TextType::class, [
                'label' => 'Adresse'
            ])
            ->add('phone1', TelType::class, [
                'label' => 'Mobile emprunteur'
            ])
            ->add('phone2', TelType::class, [
                'label' => 'Mobile co-emprunteur'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email'
            ])
            ->add('zipCode', NumberType::class, [
                'label' => 'Code postal'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville'
            ])
            ->add('hasOption', CheckboxType::class, [
                'label' => "J'accepte que les informations transmises soient utilisées par Solutis et ses partenaires dans le cadre d'une demande de financement et de la relation commerciale qui peut en découler."
            ])
            ->add('submit', SubmitType::class, ['label' => 'Envoyer']);
    }
}
