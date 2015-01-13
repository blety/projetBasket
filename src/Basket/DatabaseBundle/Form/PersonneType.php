<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('genre','choice',array(
                'choices'=> array('masculin' => 'masculin', 'féminin' => 'féminin')
            ))
            ->add('birthday')
            ->add('adresse')
            ->add('adresseParents')
            ->add('villeParents')
            ->add('codepostalParents')
            ->add('mobile')
            ->add('mobileSecondaire')
            ->add('tel')
            ->add('telSecondaire')
            ->add('email')
            ->add('emailParents')
            ->add('license')
            ->add('divers')
            ->add('refPersonne','entity',array(
                  'class'=>'BasketDatabaseBundle:RefPersonne',
                  'property'=>'type'
                ))
            ->add('ville')
            ->add('codePostal')
            ->add('inscrit')
            ->add('licensePayee')
            ->add('licenseRecue')
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Basket\DatabaseBundle\Entity\Personne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'basket_databasebundle_personne';
    }
}
