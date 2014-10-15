<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RencontreDomicileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->add('date')    
            ->add('convocation')
            ->add('score')            
            ->add('equipeDom','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'categorie'
            ))
            ->add('equipeAdv','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'categorie'
            ))
            ->add('arbitreA','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                //'property'=>'nom',
                'query_builder'=> function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                            
                            ->where('p.refPersonne=:id')
                            ->setParameter('id',2);
                    },
            ))
            ->add('arbitreB','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                //'property'=>'nom',
                'query_builder'=> function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                            
                            ->where('p.refPersonne=:id')
                            ->setParameter('id',2);
                    },
            ))
            ->add('marqueurA','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                'property'=>'nom'
            ))
            ->add('marqueurB','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                'property'=>'nom'
            ))
            ->add('marqueurC','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                'property'=>'nom'
            ))
            ->add('divers')
            ->add('save','submit')           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Basket\DatabaseBundle\Entity\RencontreDomicile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'basket_databasebundle_rencontredomicile';
    }
}
