<?php

namespace ConnectionBDBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenRadiologicoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('crestaAlveolar')
            ->add('laminaDura')
            ->add('membranaPeriodontal')
            ->add('calculo')
            ->add('caries')
            ->add('retauracionesDentales')
            ->add('furcaciones')
            ->add('anomaliasDentales')
            ->add('patologiasMaxilares')
            ->add('morfologiaRadicular')
            ->add('coronaRaizHuesoRematente')
            ->add('tercerosMolares')
            ->add('secuenciaErupcion')
            ->add('comentarios')
            ->add('idexpediente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConnectionBDBundle\Entity\ExamenRadiologico'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connectionbdbundle_examenradiologico';
    }
}
