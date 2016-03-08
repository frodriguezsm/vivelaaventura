<?php

namespace VLA\vivelaaventuraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreEvento')
            ->add('imagen', 'image')
            ->add('descripcionEvento')
            ->add('requisitosEvento')
            ->add('idTipoActividad', 'text')
        ; 
    			
    	
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VLA\vivelaaventuraBundle\Entity\Eventos'
        ));
    }
}
