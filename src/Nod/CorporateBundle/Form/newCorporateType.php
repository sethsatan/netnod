<?php

namespace Nod\CorporateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class newCorporateType extends AbstractType
{
            
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => "Nom de l'entreprise  ",'required'  => true))
            ->add('save', SubmitType::class, array('label' => '  Valider  '))
            ->getForm();
    }
}
