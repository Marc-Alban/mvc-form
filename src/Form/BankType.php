<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\Type\BankNameType;
use App\Form\Type\BankCardType;

class BankType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bankType', BankNameType::class)
            ->add('bankCardType', BankCardType::class)
            ->add('yearBank', ChoiceType::class, [
                'choices' => $this->getYears(),
                'label' => 'Depuis quelle date ?'
            ])
            ->add('next', SubmitType::class, ['label' => 'Suivant'])
            ->add('previous', SubmitType::class, ['label' => 'Précédent']);
    }

    private function getYears(): array
    {
        $years = [];
        for ($i = date('Y'); $i >= date('Y') - 100; $i--) {
            $years[$i] = $i;
        }
        return $years;
    }
}
