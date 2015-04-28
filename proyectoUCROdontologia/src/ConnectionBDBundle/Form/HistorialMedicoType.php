<?php

namespace ConnectionBDBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HistorialMedicoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dolorCabezaFrecuente')
            ->add('historialDental')
            ->add('vertigo')
            ->add('desmayo')
            ->add('perdidaDeConsiencia')
            ->add('problemasVisules')
            ->add('problemasAuditivos')
            ->add('sinusitis')
            ->add('obstruccionNasal')
            ->add('problemasTiroides')
            ->add('diabetes')
            ->add('cambiosInesperadosPeso')
            ->add('disnea')
            ->add('tos')
            ->add('tuberculosis')
            ->add('enfisemaPulmonar')
            ->add('asma')
            ->add('infartoMiocardio')
            ->add('insuficienciaCadiaca')
            ->add('hipertensionArterial')
            ->add('anginaDePecho')
            ->add('soploCardiaco')
            ->add('fiebreReumatica')
            ->add('lesionesCardiacasCongenitas')
            ->add('valvulasCardicasArtificiales')
            ->add('anemia')
            ->add('tranfisiones')
            ->add('trobosis')
            ->add('anomalisasDeCelulasSangineas')
            ->add('hepatitis')
            ->add('ictericia')
            ->add('ulceraGastrica')
            ->add('enfermedadDeTramisionSexual')
            ->add('vih')
            ->add('paralisis')
            ->add('depresion')
            ->add('nerviosismo')
            ->add('tension')
            ->add('convulsiones')
            ->add('hemorragias')
            ->add('artritis')
            ->add('reumatismo')
            ->add('transplantes')
            ->add('alteracionesEnRinones')
            ->add('intoleranciaAAlimentos')
            ->add('mialgias')
            ->add('limitaionesDeMovimiento')
            ->add('trumatismoEnLaCara')
            ->add('amigdalitis')
            ->add('cancer')
            ->add('leucemia')
            ->add('embarazo')
            ->add('aa')
            ->add('aq')
            ->add('medicamentos')
            ->add('historialFamiliarAfp')
            ->add('historialFamiliarAfnp')
            ->add('historialSocialTipoDieta')
            ->add('historialSocialTabaquismo')
            ->add('historialSocialAlcoholismo')
            ->add('historialSocialConsumoDrogas')
            ->add('historiaDentalUltimaVisita')
            ->add('historiaDentalTratamientoRecibido')
            ->add('historiaDentalUltimaRadiografia')
            ->add('historiaDentalReaccionesAnestecia')
            ->add('historiaDentalExperienciasDesagradables')
            ->add('historiaDentalFrecuendiaCepillado')
            ->add('historiaDentalTipoCepillo')
            ->add('historiaDentalTecnicaCepillo')
            ->add('historiaDentalFrecuenciaDeUsoHiloDental')
            ->add('historiaDentalTipoHiloDental')
            ->add('historiaDentalEnguajeBucal')
            ->add('historiaDentalDificultadParaAbrirBoca')
            ->add('historiaDentalRuidoMandubula')
            ->add('historiaDentalDislocamientoMandubula')
            ->add('historiaDentalDolorOido')
            ->add('historiaDentalDolorMasticar')
            ->add('historiaDentalCambiosMordida')
            ->add('historiaDentalDoloresDeCabeza')
            ->add('historiaDentalTraumaCabeza')
            ->add('historiaDentalArtritis')
            ->add('historiaDentalProblemaMasticar')
            ->add('historiaDentalRechinadoDientes')
            ->add('historiaDentalProblemaAtm')
            ->add('idexpediente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConnectionBDBundle\Entity\HistorialMedico'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connectionbdbundle_historialmedico';
    }
}
