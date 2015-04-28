<?php

namespace ConnectionBDBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PacienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cedula')
            ->add('fechaDeIngreso')
            ->add('sexo')
            ->add('edad')
            ->add('nombre')
            ->add('ocupacion')
            ->add('carne')
            ->add('apartadoPostal')
            ->add('beca')
            ->add('carrera')
            ->add('estadoCivil')
            ->add('direccion')
            ->add('telefonoHabitacion')
            ->add('telefonoTrabajo')
            ->add('telefonoMovil')
            ->add('correoElectronico')
            ->add('sintoma')
            ->add('idencargado')
            ->add('idodontologo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConnectionBDBundle\Entity\Paciente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connectionbdbundle_paciente';
    }
}
