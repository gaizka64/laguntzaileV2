<?php

namespace laguntzaile\BenevolesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use laguntzaile\BenevolesBundle\Form\PersonneType ;

class DisponibiliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	    ->add('idPersonne', new PersonneType(), array(
					'label' => ''))
            ->add('joursEtHeuresDispo','textarea',array(
                'label' => 'Disponibilités'))
                  
            ->add('listeAmis','textarea',array(
                'required' => 'false',
                'label' => 'Affinités'))
                  
            ->add('typePoste', 'textarea', array(
                'label' => 'Type de poste désiré',
                'required' => 'false'))
                  
            ->add('commentaire', 'textarea',array(
                'required' => false,
                'label' => 'Remarques et commentaires'));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'laguntzaile\BenevolesBundle\Entity\Disponibilite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'laguntzaile_benevolesbundle_disponibilite';
    }
}
