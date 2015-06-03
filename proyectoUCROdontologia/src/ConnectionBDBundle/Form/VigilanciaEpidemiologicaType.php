<?php

namespace ConnectionBDBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VigilanciaEpidemiologicaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('tipoPaciente')
            ->add('condicionMotora')
            ->add('placaDentobacteriana')
            ->add('placaDentobacterianaPorcentaje')
            ->add('calculoDental')
            ->add('cariesActiva')
            ->add('cariesActivaNumero')
            ->add('fisurasProfundas')
            ->add('fisurasProfundasNumero')
            ->add('restauracionesDesajustadas')
            ->add('restauracionesDesajustadasNumero')
            ->add('sangradoEspontaneo')
            ->add('sangradoAlSondeo')
            ->add('sangradoAlSondeoPorcentaje')
            ->add('ausenciaPiezasCaries')
            ->add('ausenciaPiezasCariesNumero')
            ->add('tipoOclusion')
            ->add('necesidadesQuirurgicas')
            ->add('fuma')
            ->add('instruccionesFisioterapia')
            ->add('odontograma')
            ->add('idexpediente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConnectionBDBundle\Entity\VigilanciaEpidemiologica'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connectionbdbundle_vigilanciaepidemiologica';
    }
}
