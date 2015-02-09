<?php

namespace Basket\DatabaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annee1')
            ->add('annee2')
            ->add('annee3')
            ->add('nom')
            ->add('sigle')
            ->add('niveau')
            ->add('genre','choice',array(
                'choices'=> array('masculin' => 'masculin', 'féminin' => 'féminin')
            ))
            ->add('numero')
            ->add('categorie')
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Basket\DatabaseBundle\Entity\Equipe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'basket_databasebundle_equipe';
    }
}
