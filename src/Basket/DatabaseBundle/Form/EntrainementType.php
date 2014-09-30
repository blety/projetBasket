<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntrainementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jour')
            ->add('debut')
            ->add('fin')
            ->add('obligatoire')
            ->add('salle')
            ->add('entraineur','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                'property'=>'nom'
            ))
            ->add('equipe','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'nom'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Basket\DatabaseBundle\Entity\Entrainement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'basket_databasebundle_entrainement';
    }
}
