<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

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
            ->add('salle','entity',array(
                'class'=>'BasketDatabaseBundle:Salle',
                'property'=>'nom'
            ))
            ->add('entraineur','entity',array(
                'class'=>'BasketDatabaseBundle:Personne',
                'property'=>'username',
                'query_builder'=> function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                            ->where('p.refPersonne=:id')
                            ->setParameter('id',5);
                    },
            ))
            ->add('equipe','entity',array(
                'class'=>'BasketDatabaseBundle:Equipe',
                'property'=>'categorie'
            ))
            ->add('save','submit')
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
