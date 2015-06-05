<?php

namespace MegaCastingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        // add your custom field
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('dateNaissance', 'date');

    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
}