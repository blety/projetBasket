<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RencontreExterieurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('heureDepart')
            ->add('heureMatch')
            ->add('transport')
            ->add('equipeDom','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'categorie'
            ))
            ->add('equipeAdv','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'categorie'
            ))
            ->add('score',null,array('label'=>'Score (*)'))
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Basket\DatabaseBundle\Entity\RencontreExterieur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'basket_databasebundle_rencontreexterieur';
    }
}
