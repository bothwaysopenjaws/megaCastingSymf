<?php

namespace MegaCastingBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\DateTime;


class candidatureArtiste extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // mise en place d'un formulaire
                 $builder->add("Nom");
                 $builder ->add("Prenom");
                 $builder->add("Email","email");
                 $builder->add("Telephone");
                 $builder ->add("CV","file" );
                 $builder->add("Lettre_de_motivation","file");
                 $builder->add("Envoyer","submit");
    }
    public function getName() {
        return 'megacasting_megacastingbundle_candidatureartiste';
    }
}
