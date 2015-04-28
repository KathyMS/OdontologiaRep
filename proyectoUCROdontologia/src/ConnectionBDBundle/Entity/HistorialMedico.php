<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialMedico
 */
class HistorialMedico
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $dolorCabezaFrecuente;

    /**
     * @var string
     */
    private $historialDental;

    /**
     * @var boolean
     */
    private $vertigo;

    /**
     * @var boolean
     */
    private $desmayo;

    /**
     * @var boolean
     */
    private $perdidaDeConsiencia;

    /**
     * @var boolean
     */
    private $problemasVisules;

    /**
     * @var boolean
     */
    private $problemasAuditivos;

    /**
     * @var boolean
     */
    private $sinusitis;

    /**
     * @var boolean
     */
    private $obstruccionNasal;

    /**
     * @var boolean
     */
    private $problemasTiroides;

    /**
     * @var boolean
     */
    private $diabetes;

    /**
     * @var boolean
     */
    private $cambiosInesperadosPeso;

    /**
     * @var boolean
     */
    private $disnea;

    /**
     * @var boolean
     */
    private $tos;

    /**
     * @var boolean
     */
    private $tuberculosis;

    /**
     * @var boolean
     */
    private $enfisemaPulmonar;

    /**
     * @var boolean
     */
    private $asma;

    /**
     * @var boolean
     */
    private $infartoMiocardio;

    /**
     * @var boolean
     */
    private $insuficienciaCadiaca;

    /**
     * @var boolean
     */
    private $hipertensionArterial;

    /**
     * @var boolean
     */
    private $anginaDePecho;

    /**
     * @var boolean
     */
    private $soploCardiaco;

    /**
     * @var boolean
     */
    private $fiebreReumatica;

    /**
     * @var boolean
     */
    private $lesionesCardiacasCongenitas;

    /**
     * @var boolean
     */
    private $valvulasCardicasArtificiales;

    /**
     * @var boolean
     */
    private $anemia;

    /**
     * @var boolean
     */
    private $tranfisiones;

    /**
     * @var boolean
     */
    private $trobosis;

    /**
     * @var boolean
     */
    private $anomalisasDeCelulasSangineas;

    /**
     * @var boolean
     */
    private $hepatitis;

    /**
     * @var boolean
     */
    private $ictericia;

    /**
     * @var boolean
     */
    private $ulceraGastrica;

    /**
     * @var boolean
     */
    private $enfermedadDeTramisionSexual;

    /**
     * @var boolean
     */
    private $vih;

    /**
     * @var boolean
     */
    private $paralisis;

    /**
     * @var boolean
     */
    private $depresion;

    /**
     * @var boolean
     */
    private $nerviosismo;

    /**
     * @var boolean
     */
    private $tension;

    /**
     * @var boolean
     */
    private $convulsiones;

    /**
     * @var boolean
     */
    private $hemorragias;

    /**
     * @var boolean
     */
    private $artritis;

    /**
     * @var boolean
     */
    private $reumatismo;

    /**
     * @var boolean
     */
    private $transplantes;

    /**
     * @var boolean
     */
    private $alteracionesEnRinones;

    /**
     * @var boolean
     */
    private $intoleranciaAAlimentos;

    /**
     * @var boolean
     */
    private $mialgias;

    /**
     * @var boolean
     */
    private $limitaionesDeMovimiento;

    /**
     * @var boolean
     */
    private $trumatismoEnLaCara;

    /**
     * @var boolean
     */
    private $amigdalitis;

    /**
     * @var boolean
     */
    private $cancer;

    /**
     * @var boolean
     */
    private $leucemia;

    /**
     * @var boolean
     */
    private $embarazo;

    /**
     * @var string
     */
    private $aa;

    /**
     * @var string
     */
    private $aq;

    /**
     * @var string
     */
    private $medicamentos;

    /**
     * @var string
     */
    private $historialFamiliarAfp;

    /**
     * @var string
     */
    private $historialFamiliarAfnp;

    /**
     * @var string
     */
    private $historialSocialTipoDieta;

    /**
     * @var boolean
     */
    private $historialSocialTabaquismo;

    /**
     * @var boolean
     */
    private $historialSocialAlcoholismo;

    /**
     * @var boolean
     */
    private $historialSocialConsumoDrogas;

    /**
     * @var string
     */
    private $historiaDentalUltimaVisita;

    /**
     * @var string
     */
    private $historiaDentalTratamientoRecibido;

    /**
     * @var string
     */
    private $historiaDentalUltimaRadiografia;

    /**
     * @var string
     */
    private $historiaDentalReaccionesAnestecia;

    /**
     * @var string
     */
    private $historiaDentalExperienciasDesagradables;

    /**
     * @var string
     */
    private $historiaDentalFrecuendiaCepillado;

    /**
     * @var string
     */
    private $historiaDentalTipoCepillo;

    /**
     * @var string
     */
    private $historiaDentalTecnicaCepillo;

    /**
     * @var integer
     */
    private $historiaDentalFrecuenciaDeUsoHiloDental;

    /**
     * @var string
     */
    private $historiaDentalTipoHiloDental;

    /**
     * @var string
     */
    private $historiaDentalEnguajeBucal;

    /**
     * @var boolean
     */
    private $historiaDentalDificultadParaAbrirBoca;

    /**
     * @var boolean
     */
    private $historiaDentalRuidoMandubula;

    /**
     * @var boolean
     */
    private $historiaDentalDislocamientoMandubula;

    /**
     * @var boolean
     */
    private $historiaDentalDolorOido;

    /**
     * @var boolean
     */
    private $historiaDentalDolorMasticar;

    /**
     * @var boolean
     */
    private $historiaDentalCambiosMordida;

    /**
     * @var boolean
     */
    private $historiaDentalDoloresDeCabeza;

    /**
     * @var boolean
     */
    private $historiaDentalTraumaCabeza;

    /**
     * @var boolean
     */
    private $historiaDentalArtritis;

    /**
     * @var boolean
     */
    private $historiaDentalProblemaMasticar;

    /**
     * @var boolean
     */
    private $historiaDentalRechinadoDientes;

    /**
     * @var boolean
     */
    private $historiaDentalProblemaAtm;

    /**
     * @var \ConnectionBDBundle\Entity\Expediente
     */
    private $idexpediente;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dolorCabezaFrecuente
     *
     * @param boolean $dolorCabezaFrecuente
     * @return HistorialMedico
     */
    public function setDolorCabezaFrecuente($dolorCabezaFrecuente)
    {
        $this->dolorCabezaFrecuente = $dolorCabezaFrecuente;
    
        return $this;
    }

    /**
     * Get dolorCabezaFrecuente
     *
     * @return boolean 
     */
    public function getDolorCabezaFrecuente()
    {
        return $this->dolorCabezaFrecuente;
    }

    /**
     * Set historialDental
     *
     * @param string $historialDental
     * @return HistorialMedico
     */
    public function setHistorialDental($historialDental)
    {
        $this->historialDental = $historialDental;
    
        return $this;
    }

    /**
     * Get historialDental
     *
     * @return string 
     */
    public function getHistorialDental()
    {
        return $this->historialDental;
    }

    /**
     * Set vertigo
     *
     * @param boolean $vertigo
     * @return HistorialMedico
     */
    public function setVertigo($vertigo)
    {
        $this->vertigo = $vertigo;
    
        return $this;
    }

    /**
     * Get vertigo
     *
     * @return boolean 
     */
    public function getVertigo()
    {
        return $this->vertigo;
    }

    /**
     * Set desmayo
     *
     * @param boolean $desmayo
     * @return HistorialMedico
     */
    public function setDesmayo($desmayo)
    {
        $this->desmayo = $desmayo;
    
        return $this;
    }

    /**
     * Get desmayo
     *
     * @return boolean 
     */
    public function getDesmayo()
    {
        return $this->desmayo;
    }

    /**
     * Set perdidaDeConsiencia
     *
     * @param boolean $perdidaDeConsiencia
     * @return HistorialMedico
     */
    public function setPerdidaDeConsiencia($perdidaDeConsiencia)
    {
        $this->perdidaDeConsiencia = $perdidaDeConsiencia;
    
        return $this;
    }

    /**
     * Get perdidaDeConsiencia
     *
     * @return boolean 
     */
    public function getPerdidaDeConsiencia()
    {
        return $this->perdidaDeConsiencia;
    }

    /**
     * Set problemasVisules
     *
     * @param boolean $problemasVisules
     * @return HistorialMedico
     */
    public function setProblemasVisules($problemasVisules)
    {
        $this->problemasVisules = $problemasVisules;
    
        return $this;
    }

    /**
     * Get problemasVisules
     *
     * @return boolean 
     */
    public function getProblemasVisules()
    {
        return $this->problemasVisules;
    }

    /**
     * Set problemasAuditivos
     *
     * @param boolean $problemasAuditivos
     * @return HistorialMedico
     */
    public function setProblemasAuditivos($problemasAuditivos)
    {
        $this->problemasAuditivos = $problemasAuditivos;
    
        return $this;
    }

    /**
     * Get problemasAuditivos
     *
     * @return boolean 
     */
    public function getProblemasAuditivos()
    {
        return $this->problemasAuditivos;
    }

    /**
     * Set sinusitis
     *
     * @param boolean $sinusitis
     * @return HistorialMedico
     */
    public function setSinusitis($sinusitis)
    {
        $this->sinusitis = $sinusitis;
    
        return $this;
    }

    /**
     * Get sinusitis
     *
     * @return boolean 
     */
    public function getSinusitis()
    {
        return $this->sinusitis;
    }

    /**
     * Set obstruccionNasal
     *
     * @param boolean $obstruccionNasal
     * @return HistorialMedico
     */
    public function setObstruccionNasal($obstruccionNasal)
    {
        $this->obstruccionNasal = $obstruccionNasal;
    
        return $this;
    }

    /**
     * Get obstruccionNasal
     *
     * @return boolean 
     */
    public function getObstruccionNasal()
    {
        return $this->obstruccionNasal;
    }

    /**
     * Set problemasTiroides
     *
     * @param boolean $problemasTiroides
     * @return HistorialMedico
     */
    public function setProblemasTiroides($problemasTiroides)
    {
        $this->problemasTiroides = $problemasTiroides;
    
        return $this;
    }

    /**
     * Get problemasTiroides
     *
     * @return boolean 
     */
    public function getProblemasTiroides()
    {
        return $this->problemasTiroides;
    }

    /**
     * Set diabetes
     *
     * @param boolean $diabetes
     * @return HistorialMedico
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;
    
        return $this;
    }

    /**
     * Get diabetes
     *
     * @return boolean 
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }

    /**
     * Set cambiosInesperadosPeso
     *
     * @param boolean $cambiosInesperadosPeso
     * @return HistorialMedico
     */
    public function setCambiosInesperadosPeso($cambiosInesperadosPeso)
    {
        $this->cambiosInesperadosPeso = $cambiosInesperadosPeso;
    
        return $this;
    }

    /**
     * Get cambiosInesperadosPeso
     *
     * @return boolean 
     */
    public function getCambiosInesperadosPeso()
    {
        return $this->cambiosInesperadosPeso;
    }

    /**
     * Set disnea
     *
     * @param boolean $disnea
     * @return HistorialMedico
     */
    public function setDisnea($disnea)
    {
        $this->disnea = $disnea;
    
        return $this;
    }

    /**
     * Get disnea
     *
     * @return boolean 
     */
    public function getDisnea()
    {
        return $this->disnea;
    }

    /**
     * Set tos
     *
     * @param boolean $tos
     * @return HistorialMedico
     */
    public function setTos($tos)
    {
        $this->tos = $tos;
    
        return $this;
    }

    /**
     * Get tos
     *
     * @return boolean 
     */
    public function getTos()
    {
        return $this->tos;
    }

    /**
     * Set tuberculosis
     *
     * @param boolean $tuberculosis
     * @return HistorialMedico
     */
    public function setTuberculosis($tuberculosis)
    {
        $this->tuberculosis = $tuberculosis;
    
        return $this;
    }

    /**
     * Get tuberculosis
     *
     * @return boolean 
     */
    public function getTuberculosis()
    {
        return $this->tuberculosis;
    }

    /**
     * Set enfisemaPulmonar
     *
     * @param boolean $enfisemaPulmonar
     * @return HistorialMedico
     */
    public function setEnfisemaPulmonar($enfisemaPulmonar)
    {
        $this->enfisemaPulmonar = $enfisemaPulmonar;
    
        return $this;
    }

    /**
     * Get enfisemaPulmonar
     *
     * @return boolean 
     */
    public function getEnfisemaPulmonar()
    {
        return $this->enfisemaPulmonar;
    }

    /**
     * Set asma
     *
     * @param boolean $asma
     * @return HistorialMedico
     */
    public function setAsma($asma)
    {
        $this->asma = $asma;
    
        return $this;
    }

    /**
     * Get asma
     *
     * @return boolean 
     */
    public function getAsma()
    {
        return $this->asma;
    }

    /**
     * Set infartoMiocardio
     *
     * @param boolean $infartoMiocardio
     * @return HistorialMedico
     */
    public function setInfartoMiocardio($infartoMiocardio)
    {
        $this->infartoMiocardio = $infartoMiocardio;
    
        return $this;
    }

    /**
     * Get infartoMiocardio
     *
     * @return boolean 
     */
    public function getInfartoMiocardio()
    {
        return $this->infartoMiocardio;
    }

    /**
     * Set insuficienciaCadiaca
     *
     * @param boolean $insuficienciaCadiaca
     * @return HistorialMedico
     */
    public function setInsuficienciaCadiaca($insuficienciaCadiaca)
    {
        $this->insuficienciaCadiaca = $insuficienciaCadiaca;
    
        return $this;
    }

    /**
     * Get insuficienciaCadiaca
     *
     * @return boolean 
     */
    public function getInsuficienciaCadiaca()
    {
        return $this->insuficienciaCadiaca;
    }

    /**
     * Set hipertensionArterial
     *
     * @param boolean $hipertensionArterial
     * @return HistorialMedico
     */
    public function setHipertensionArterial($hipertensionArterial)
    {
        $this->hipertensionArterial = $hipertensionArterial;
    
        return $this;
    }

    /**
     * Get hipertensionArterial
     *
     * @return boolean 
     */
    public function getHipertensionArterial()
    {
        return $this->hipertensionArterial;
    }

    /**
     * Set anginaDePecho
     *
     * @param boolean $anginaDePecho
     * @return HistorialMedico
     */
    public function setAnginaDePecho($anginaDePecho)
    {
        $this->anginaDePecho = $anginaDePecho;
    
        return $this;
    }

    /**
     * Get anginaDePecho
     *
     * @return boolean 
     */
    public function getAnginaDePecho()
    {
        return $this->anginaDePecho;
    }

    /**
     * Set soploCardiaco
     *
     * @param boolean $soploCardiaco
     * @return HistorialMedico
     */
    public function setSoploCardiaco($soploCardiaco)
    {
        $this->soploCardiaco = $soploCardiaco;
    
        return $this;
    }

    /**
     * Get soploCardiaco
     *
     * @return boolean 
     */
    public function getSoploCardiaco()
    {
        return $this->soploCardiaco;
    }

    /**
     * Set fiebreReumatica
     *
     * @param boolean $fiebreReumatica
     * @return HistorialMedico
     */
    public function setFiebreReumatica($fiebreReumatica)
    {
        $this->fiebreReumatica = $fiebreReumatica;
    
        return $this;
    }

    /**
     * Get fiebreReumatica
     *
     * @return boolean 
     */
    public function getFiebreReumatica()
    {
        return $this->fiebreReumatica;
    }

    /**
     * Set lesionesCardiacasCongenitas
     *
     * @param boolean $lesionesCardiacasCongenitas
     * @return HistorialMedico
     */
    public function setLesionesCardiacasCongenitas($lesionesCardiacasCongenitas)
    {
        $this->lesionesCardiacasCongenitas = $lesionesCardiacasCongenitas;
    
        return $this;
    }

    /**
     * Get lesionesCardiacasCongenitas
     *
     * @return boolean 
     */
    public function getLesionesCardiacasCongenitas()
    {
        return $this->lesionesCardiacasCongenitas;
    }

    /**
     * Set valvulasCardicasArtificiales
     *
     * @param boolean $valvulasCardicasArtificiales
     * @return HistorialMedico
     */
    public function setValvulasCardicasArtificiales($valvulasCardicasArtificiales)
    {
        $this->valvulasCardicasArtificiales = $valvulasCardicasArtificiales;
    
        return $this;
    }

    /**
     * Get valvulasCardicasArtificiales
     *
     * @return boolean 
     */
    public function getValvulasCardicasArtificiales()
    {
        return $this->valvulasCardicasArtificiales;
    }

    /**
     * Set anemia
     *
     * @param boolean $anemia
     * @return HistorialMedico
     */
    public function setAnemia($anemia)
    {
        $this->anemia = $anemia;
    
        return $this;
    }

    /**
     * Get anemia
     *
     * @return boolean 
     */
    public function getAnemia()
    {
        return $this->anemia;
    }

    /**
     * Set tranfisiones
     *
     * @param boolean $tranfisiones
     * @return HistorialMedico
     */
    public function setTranfisiones($tranfisiones)
    {
        $this->tranfisiones = $tranfisiones;
    
        return $this;
    }

    /**
     * Get tranfisiones
     *
     * @return boolean 
     */
    public function getTranfisiones()
    {
        return $this->tranfisiones;
    }

    /**
     * Set trobosis
     *
     * @param boolean $trobosis
     * @return HistorialMedico
     */
    public function setTrobosis($trobosis)
    {
        $this->trobosis = $trobosis;
    
        return $this;
    }

    /**
     * Get trobosis
     *
     * @return boolean 
     */
    public function getTrobosis()
    {
        return $this->trobosis;
    }

    /**
     * Set anomalisasDeCelulasSangineas
     *
     * @param boolean $anomalisasDeCelulasSangineas
     * @return HistorialMedico
     */
    public function setAnomalisasDeCelulasSangineas($anomalisasDeCelulasSangineas)
    {
        $this->anomalisasDeCelulasSangineas = $anomalisasDeCelulasSangineas;
    
        return $this;
    }

    /**
     * Get anomalisasDeCelulasSangineas
     *
     * @return boolean 
     */
    public function getAnomalisasDeCelulasSangineas()
    {
        return $this->anomalisasDeCelulasSangineas;
    }

    /**
     * Set hepatitis
     *
     * @param boolean $hepatitis
     * @return HistorialMedico
     */
    public function setHepatitis($hepatitis)
    {
        $this->hepatitis = $hepatitis;
    
        return $this;
    }

    /**
     * Get hepatitis
     *
     * @return boolean 
     */
    public function getHepatitis()
    {
        return $this->hepatitis;
    }

    /**
     * Set ictericia
     *
     * @param boolean $ictericia
     * @return HistorialMedico
     */
    public function setIctericia($ictericia)
    {
        $this->ictericia = $ictericia;
    
        return $this;
    }

    /**
     * Get ictericia
     *
     * @return boolean 
     */
    public function getIctericia()
    {
        return $this->ictericia;
    }

    /**
     * Set ulceraGastrica
     *
     * @param boolean $ulceraGastrica
     * @return HistorialMedico
     */
    public function setUlceraGastrica($ulceraGastrica)
    {
        $this->ulceraGastrica = $ulceraGastrica;
    
        return $this;
    }

    /**
     * Get ulceraGastrica
     *
     * @return boolean 
     */
    public function getUlceraGastrica()
    {
        return $this->ulceraGastrica;
    }

    /**
     * Set enfermedadDeTramisionSexual
     *
     * @param boolean $enfermedadDeTramisionSexual
     * @return HistorialMedico
     */
    public function setEnfermedadDeTramisionSexual($enfermedadDeTramisionSexual)
    {
        $this->enfermedadDeTramisionSexual = $enfermedadDeTramisionSexual;
    
        return $this;
    }

    /**
     * Get enfermedadDeTramisionSexual
     *
     * @return boolean 
     */
    public function getEnfermedadDeTramisionSexual()
    {
        return $this->enfermedadDeTramisionSexual;
    }

    /**
     * Set vih
     *
     * @param boolean $vih
     * @return HistorialMedico
     */
    public function setVih($vih)
    {
        $this->vih = $vih;
    
        return $this;
    }

    /**
     * Get vih
     *
     * @return boolean 
     */
    public function getVih()
    {
        return $this->vih;
    }

    /**
     * Set paralisis
     *
     * @param boolean $paralisis
     * @return HistorialMedico
     */
    public function setParalisis($paralisis)
    {
        $this->paralisis = $paralisis;
    
        return $this;
    }

    /**
     * Get paralisis
     *
     * @return boolean 
     */
    public function getParalisis()
    {
        return $this->paralisis;
    }

    /**
     * Set depresion
     *
     * @param boolean $depresion
     * @return HistorialMedico
     */
    public function setDepresion($depresion)
    {
        $this->depresion = $depresion;
    
        return $this;
    }

    /**
     * Get depresion
     *
     * @return boolean 
     */
    public function getDepresion()
    {
        return $this->depresion;
    }

    /**
     * Set nerviosismo
     *
     * @param boolean $nerviosismo
     * @return HistorialMedico
     */
    public function setNerviosismo($nerviosismo)
    {
        $this->nerviosismo = $nerviosismo;
    
        return $this;
    }

    /**
     * Get nerviosismo
     *
     * @return boolean 
     */
    public function getNerviosismo()
    {
        return $this->nerviosismo;
    }

    /**
     * Set tension
     *
     * @param boolean $tension
     * @return HistorialMedico
     */
    public function setTension($tension)
    {
        $this->tension = $tension;
    
        return $this;
    }

    /**
     * Get tension
     *
     * @return boolean 
     */
    public function getTension()
    {
        return $this->tension;
    }

    /**
     * Set convulsiones
     *
     * @param boolean $convulsiones
     * @return HistorialMedico
     */
    public function setConvulsiones($convulsiones)
    {
        $this->convulsiones = $convulsiones;
    
        return $this;
    }

    /**
     * Get convulsiones
     *
     * @return boolean 
     */
    public function getConvulsiones()
    {
        return $this->convulsiones;
    }

    /**
     * Set hemorragias
     *
     * @param boolean $hemorragias
     * @return HistorialMedico
     */
    public function setHemorragias($hemorragias)
    {
        $this->hemorragias = $hemorragias;
    
        return $this;
    }

    /**
     * Get hemorragias
     *
     * @return boolean 
     */
    public function getHemorragias()
    {
        return $this->hemorragias;
    }

    /**
     * Set artritis
     *
     * @param boolean $artritis
     * @return HistorialMedico
     */
    public function setArtritis($artritis)
    {
        $this->artritis = $artritis;
    
        return $this;
    }

    /**
     * Get artritis
     *
     * @return boolean 
     */
    public function getArtritis()
    {
        return $this->artritis;
    }

    /**
     * Set reumatismo
     *
     * @param boolean $reumatismo
     * @return HistorialMedico
     */
    public function setReumatismo($reumatismo)
    {
        $this->reumatismo = $reumatismo;
    
        return $this;
    }

    /**
     * Get reumatismo
     *
     * @return boolean 
     */
    public function getReumatismo()
    {
        return $this->reumatismo;
    }

    /**
     * Set transplantes
     *
     * @param boolean $transplantes
     * @return HistorialMedico
     */
    public function setTransplantes($transplantes)
    {
        $this->transplantes = $transplantes;
    
        return $this;
    }

    /**
     * Get transplantes
     *
     * @return boolean 
     */
    public function getTransplantes()
    {
        return $this->transplantes;
    }

    /**
     * Set alteracionesEnRinones
     *
     * @param boolean $alteracionesEnRinones
     * @return HistorialMedico
     */
    public function setAlteracionesEnRinones($alteracionesEnRinones)
    {
        $this->alteracionesEnRinones = $alteracionesEnRinones;
    
        return $this;
    }

    /**
     * Get alteracionesEnRinones
     *
     * @return boolean 
     */
    public function getAlteracionesEnRinones()
    {
        return $this->alteracionesEnRinones;
    }

    /**
     * Set intoleranciaAAlimentos
     *
     * @param boolean $intoleranciaAAlimentos
     * @return HistorialMedico
     */
    public function setIntoleranciaAAlimentos($intoleranciaAAlimentos)
    {
        $this->intoleranciaAAlimentos = $intoleranciaAAlimentos;
    
        return $this;
    }

    /**
     * Get intoleranciaAAlimentos
     *
     * @return boolean 
     */
    public function getIntoleranciaAAlimentos()
    {
        return $this->intoleranciaAAlimentos;
    }

    /**
     * Set mialgias
     *
     * @param boolean $mialgias
     * @return HistorialMedico
     */
    public function setMialgias($mialgias)
    {
        $this->mialgias = $mialgias;
    
        return $this;
    }

    /**
     * Get mialgias
     *
     * @return boolean 
     */
    public function getMialgias()
    {
        return $this->mialgias;
    }

    /**
     * Set limitaionesDeMovimiento
     *
     * @param boolean $limitaionesDeMovimiento
     * @return HistorialMedico
     */
    public function setLimitaionesDeMovimiento($limitaionesDeMovimiento)
    {
        $this->limitaionesDeMovimiento = $limitaionesDeMovimiento;
    
        return $this;
    }

    /**
     * Get limitaionesDeMovimiento
     *
     * @return boolean 
     */
    public function getLimitaionesDeMovimiento()
    {
        return $this->limitaionesDeMovimiento;
    }

    /**
     * Set trumatismoEnLaCara
     *
     * @param boolean $trumatismoEnLaCara
     * @return HistorialMedico
     */
    public function setTrumatismoEnLaCara($trumatismoEnLaCara)
    {
        $this->trumatismoEnLaCara = $trumatismoEnLaCara;
    
        return $this;
    }

    /**
     * Get trumatismoEnLaCara
     *
     * @return boolean 
     */
    public function getTrumatismoEnLaCara()
    {
        return $this->trumatismoEnLaCara;
    }

    /**
     * Set amigdalitis
     *
     * @param boolean $amigdalitis
     * @return HistorialMedico
     */
    public function setAmigdalitis($amigdalitis)
    {
        $this->amigdalitis = $amigdalitis;
    
        return $this;
    }

    /**
     * Get amigdalitis
     *
     * @return boolean 
     */
    public function getAmigdalitis()
    {
        return $this->amigdalitis;
    }

    /**
     * Set cancer
     *
     * @param boolean $cancer
     * @return HistorialMedico
     */
    public function setCancer($cancer)
    {
        $this->cancer = $cancer;
    
        return $this;
    }

    /**
     * Get cancer
     *
     * @return boolean 
     */
    public function getCancer()
    {
        return $this->cancer;
    }

    /**
     * Set leucemia
     *
     * @param boolean $leucemia
     * @return HistorialMedico
     */
    public function setLeucemia($leucemia)
    {
        $this->leucemia = $leucemia;
    
        return $this;
    }

    /**
     * Get leucemia
     *
     * @return boolean 
     */
    public function getLeucemia()
    {
        return $this->leucemia;
    }

    /**
     * Set embarazo
     *
     * @param boolean $embarazo
     * @return HistorialMedico
     */
    public function setEmbarazo($embarazo)
    {
        $this->embarazo = $embarazo;
    
        return $this;
    }

    /**
     * Get embarazo
     *
     * @return boolean 
     */
    public function getEmbarazo()
    {
        return $this->embarazo;
    }

    /**
     * Set aa
     *
     * @param string $aa
     * @return HistorialMedico
     */
    public function setAa($aa)
    {
        $this->aa = $aa;
    
        return $this;
    }

    /**
     * Get aa
     *
     * @return string 
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Set aq
     *
     * @param string $aq
     * @return HistorialMedico
     */
    public function setAq($aq)
    {
        $this->aq = $aq;
    
        return $this;
    }

    /**
     * Get aq
     *
     * @return string 
     */
    public function getAq()
    {
        return $this->aq;
    }

    /**
     * Set medicamentos
     *
     * @param string $medicamentos
     * @return HistorialMedico
     */
    public function setMedicamentos($medicamentos)
    {
        $this->medicamentos = $medicamentos;
    
        return $this;
    }

    /**
     * Get medicamentos
     *
     * @return string 
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }

    /**
     * Set historialFamiliarAfp
     *
     * @param string $historialFamiliarAfp
     * @return HistorialMedico
     */
    public function setHistorialFamiliarAfp($historialFamiliarAfp)
    {
        $this->historialFamiliarAfp = $historialFamiliarAfp;
    
        return $this;
    }

    /**
     * Get historialFamiliarAfp
     *
     * @return string 
     */
    public function getHistorialFamiliarAfp()
    {
        return $this->historialFamiliarAfp;
    }

    /**
     * Set historialFamiliarAfnp
     *
     * @param string $historialFamiliarAfnp
     * @return HistorialMedico
     */
    public function setHistorialFamiliarAfnp($historialFamiliarAfnp)
    {
        $this->historialFamiliarAfnp = $historialFamiliarAfnp;
    
        return $this;
    }

    /**
     * Get historialFamiliarAfnp
     *
     * @return string 
     */
    public function getHistorialFamiliarAfnp()
    {
        return $this->historialFamiliarAfnp;
    }

    /**
     * Set historialSocialTipoDieta
     *
     * @param string $historialSocialTipoDieta
     * @return HistorialMedico
     */
    public function setHistorialSocialTipoDieta($historialSocialTipoDieta)
    {
        $this->historialSocialTipoDieta = $historialSocialTipoDieta;
    
        return $this;
    }

    /**
     * Get historialSocialTipoDieta
     *
     * @return string 
     */
    public function getHistorialSocialTipoDieta()
    {
        return $this->historialSocialTipoDieta;
    }

    /**
     * Set historialSocialTabaquismo
     *
     * @param boolean $historialSocialTabaquismo
     * @return HistorialMedico
     */
    public function setHistorialSocialTabaquismo($historialSocialTabaquismo)
    {
        $this->historialSocialTabaquismo = $historialSocialTabaquismo;
    
        return $this;
    }

    /**
     * Get historialSocialTabaquismo
     *
     * @return boolean 
     */
    public function getHistorialSocialTabaquismo()
    {
        return $this->historialSocialTabaquismo;
    }

    /**
     * Set historialSocialAlcoholismo
     *
     * @param boolean $historialSocialAlcoholismo
     * @return HistorialMedico
     */
    public function setHistorialSocialAlcoholismo($historialSocialAlcoholismo)
    {
        $this->historialSocialAlcoholismo = $historialSocialAlcoholismo;
    
        return $this;
    }

    /**
     * Get historialSocialAlcoholismo
     *
     * @return boolean 
     */
    public function getHistorialSocialAlcoholismo()
    {
        return $this->historialSocialAlcoholismo;
    }

    /**
     * Set historialSocialConsumoDrogas
     *
     * @param boolean $historialSocialConsumoDrogas
     * @return HistorialMedico
     */
    public function setHistorialSocialConsumoDrogas($historialSocialConsumoDrogas)
    {
        $this->historialSocialConsumoDrogas = $historialSocialConsumoDrogas;
    
        return $this;
    }

    /**
     * Get historialSocialConsumoDrogas
     *
     * @return boolean 
     */
    public function getHistorialSocialConsumoDrogas()
    {
        return $this->historialSocialConsumoDrogas;
    }

    /**
     * Set historiaDentalUltimaVisita
     *
     * @param string $historiaDentalUltimaVisita
     * @return HistorialMedico
     */
    public function setHistoriaDentalUltimaVisita($historiaDentalUltimaVisita)
    {
        $this->historiaDentalUltimaVisita = $historiaDentalUltimaVisita;
    
        return $this;
    }

    /**
     * Get historiaDentalUltimaVisita
     *
     * @return string 
     */
    public function getHistoriaDentalUltimaVisita()
    {
        return $this->historiaDentalUltimaVisita;
    }

    /**
     * Set historiaDentalTratamientoRecibido
     *
     * @param string $historiaDentalTratamientoRecibido
     * @return HistorialMedico
     */
    public function setHistoriaDentalTratamientoRecibido($historiaDentalTratamientoRecibido)
    {
        $this->historiaDentalTratamientoRecibido = $historiaDentalTratamientoRecibido;
    
        return $this;
    }

    /**
     * Get historiaDentalTratamientoRecibido
     *
     * @return string 
     */
    public function getHistoriaDentalTratamientoRecibido()
    {
        return $this->historiaDentalTratamientoRecibido;
    }

    /**
     * Set historiaDentalUltimaRadiografia
     *
     * @param string $historiaDentalUltimaRadiografia
     * @return HistorialMedico
     */
    public function setHistoriaDentalUltimaRadiografia($historiaDentalUltimaRadiografia)
    {
        $this->historiaDentalUltimaRadiografia = $historiaDentalUltimaRadiografia;
    
        return $this;
    }

    /**
     * Get historiaDentalUltimaRadiografia
     *
     * @return string 
     */
    public function getHistoriaDentalUltimaRadiografia()
    {
        return $this->historiaDentalUltimaRadiografia;
    }

    /**
     * Set historiaDentalReaccionesAnestecia
     *
     * @param string $historiaDentalReaccionesAnestecia
     * @return HistorialMedico
     */
    public function setHistoriaDentalReaccionesAnestecia($historiaDentalReaccionesAnestecia)
    {
        $this->historiaDentalReaccionesAnestecia = $historiaDentalReaccionesAnestecia;
    
        return $this;
    }

    /**
     * Get historiaDentalReaccionesAnestecia
     *
     * @return string 
     */
    public function getHistoriaDentalReaccionesAnestecia()
    {
        return $this->historiaDentalReaccionesAnestecia;
    }

    /**
     * Set historiaDentalExperienciasDesagradables
     *
     * @param string $historiaDentalExperienciasDesagradables
     * @return HistorialMedico
     */
    public function setHistoriaDentalExperienciasDesagradables($historiaDentalExperienciasDesagradables)
    {
        $this->historiaDentalExperienciasDesagradables = $historiaDentalExperienciasDesagradables;
    
        return $this;
    }

    /**
     * Get historiaDentalExperienciasDesagradables
     *
     * @return string 
     */
    public function getHistoriaDentalExperienciasDesagradables()
    {
        return $this->historiaDentalExperienciasDesagradables;
    }

    /**
     * Set historiaDentalFrecuendiaCepillado
     *
     * @param string $historiaDentalFrecuendiaCepillado
     * @return HistorialMedico
     */
    public function setHistoriaDentalFrecuendiaCepillado($historiaDentalFrecuendiaCepillado)
    {
        $this->historiaDentalFrecuendiaCepillado = $historiaDentalFrecuendiaCepillado;
    
        return $this;
    }

    /**
     * Get historiaDentalFrecuendiaCepillado
     *
     * @return string 
     */
    public function getHistoriaDentalFrecuendiaCepillado()
    {
        return $this->historiaDentalFrecuendiaCepillado;
    }

    /**
     * Set historiaDentalTipoCepillo
     *
     * @param string $historiaDentalTipoCepillo
     * @return HistorialMedico
     */
    public function setHistoriaDentalTipoCepillo($historiaDentalTipoCepillo)
    {
        $this->historiaDentalTipoCepillo = $historiaDentalTipoCepillo;
    
        return $this;
    }

    /**
     * Get historiaDentalTipoCepillo
     *
     * @return string 
     */
    public function getHistoriaDentalTipoCepillo()
    {
        return $this->historiaDentalTipoCepillo;
    }

    /**
     * Set historiaDentalTecnicaCepillo
     *
     * @param string $historiaDentalTecnicaCepillo
     * @return HistorialMedico
     */
    public function setHistoriaDentalTecnicaCepillo($historiaDentalTecnicaCepillo)
    {
        $this->historiaDentalTecnicaCepillo = $historiaDentalTecnicaCepillo;
    
        return $this;
    }

    /**
     * Get historiaDentalTecnicaCepillo
     *
     * @return string 
     */
    public function getHistoriaDentalTecnicaCepillo()
    {
        return $this->historiaDentalTecnicaCepillo;
    }

    /**
     * Set historiaDentalFrecuenciaDeUsoHiloDental
     *
     * @param integer $historiaDentalFrecuenciaDeUsoHiloDental
     * @return HistorialMedico
     */
    public function setHistoriaDentalFrecuenciaDeUsoHiloDental($historiaDentalFrecuenciaDeUsoHiloDental)
    {
        $this->historiaDentalFrecuenciaDeUsoHiloDental = $historiaDentalFrecuenciaDeUsoHiloDental;
    
        return $this;
    }

    /**
     * Get historiaDentalFrecuenciaDeUsoHiloDental
     *
     * @return integer 
     */
    public function getHistoriaDentalFrecuenciaDeUsoHiloDental()
    {
        return $this->historiaDentalFrecuenciaDeUsoHiloDental;
    }

    /**
     * Set historiaDentalTipoHiloDental
     *
     * @param string $historiaDentalTipoHiloDental
     * @return HistorialMedico
     */
    public function setHistoriaDentalTipoHiloDental($historiaDentalTipoHiloDental)
    {
        $this->historiaDentalTipoHiloDental = $historiaDentalTipoHiloDental;
    
        return $this;
    }

    /**
     * Get historiaDentalTipoHiloDental
     *
     * @return string 
     */
    public function getHistoriaDentalTipoHiloDental()
    {
        return $this->historiaDentalTipoHiloDental;
    }

    /**
     * Set historiaDentalEnguajeBucal
     *
     * @param string $historiaDentalEnguajeBucal
     * @return HistorialMedico
     */
    public function setHistoriaDentalEnguajeBucal($historiaDentalEnguajeBucal)
    {
        $this->historiaDentalEnguajeBucal = $historiaDentalEnguajeBucal;
    
        return $this;
    }

    /**
     * Get historiaDentalEnguajeBucal
     *
     * @return string 
     */
    public function getHistoriaDentalEnguajeBucal()
    {
        return $this->historiaDentalEnguajeBucal;
    }

    /**
     * Set historiaDentalDificultadParaAbrirBoca
     *
     * @param boolean $historiaDentalDificultadParaAbrirBoca
     * @return HistorialMedico
     */
    public function setHistoriaDentalDificultadParaAbrirBoca($historiaDentalDificultadParaAbrirBoca)
    {
        $this->historiaDentalDificultadParaAbrirBoca = $historiaDentalDificultadParaAbrirBoca;
    
        return $this;
    }

    /**
     * Get historiaDentalDificultadParaAbrirBoca
     *
     * @return boolean 
     */
    public function getHistoriaDentalDificultadParaAbrirBoca()
    {
        return $this->historiaDentalDificultadParaAbrirBoca;
    }

    /**
     * Set historiaDentalRuidoMandubula
     *
     * @param boolean $historiaDentalRuidoMandubula
     * @return HistorialMedico
     */
    public function setHistoriaDentalRuidoMandubula($historiaDentalRuidoMandubula)
    {
        $this->historiaDentalRuidoMandubula = $historiaDentalRuidoMandubula;
    
        return $this;
    }

    /**
     * Get historiaDentalRuidoMandubula
     *
     * @return boolean 
     */
    public function getHistoriaDentalRuidoMandubula()
    {
        return $this->historiaDentalRuidoMandubula;
    }

    /**
     * Set historiaDentalDislocamientoMandubula
     *
     * @param boolean $historiaDentalDislocamientoMandubula
     * @return HistorialMedico
     */
    public function setHistoriaDentalDislocamientoMandubula($historiaDentalDislocamientoMandubula)
    {
        $this->historiaDentalDislocamientoMandubula = $historiaDentalDislocamientoMandubula;
    
        return $this;
    }

    /**
     * Get historiaDentalDislocamientoMandubula
     *
     * @return boolean 
     */
    public function getHistoriaDentalDislocamientoMandubula()
    {
        return $this->historiaDentalDislocamientoMandubula;
    }

    /**
     * Set historiaDentalDolorOido
     *
     * @param boolean $historiaDentalDolorOido
     * @return HistorialMedico
     */
    public function setHistoriaDentalDolorOido($historiaDentalDolorOido)
    {
        $this->historiaDentalDolorOido = $historiaDentalDolorOido;
    
        return $this;
    }

    /**
     * Get historiaDentalDolorOido
     *
     * @return boolean 
     */
    public function getHistoriaDentalDolorOido()
    {
        return $this->historiaDentalDolorOido;
    }

    /**
     * Set historiaDentalDolorMasticar
     *
     * @param boolean $historiaDentalDolorMasticar
     * @return HistorialMedico
     */
    public function setHistoriaDentalDolorMasticar($historiaDentalDolorMasticar)
    {
        $this->historiaDentalDolorMasticar = $historiaDentalDolorMasticar;
    
        return $this;
    }

    /**
     * Get historiaDentalDolorMasticar
     *
     * @return boolean 
     */
    public function getHistoriaDentalDolorMasticar()
    {
        return $this->historiaDentalDolorMasticar;
    }

    /**
     * Set historiaDentalCambiosMordida
     *
     * @param boolean $historiaDentalCambiosMordida
     * @return HistorialMedico
     */
    public function setHistoriaDentalCambiosMordida($historiaDentalCambiosMordida)
    {
        $this->historiaDentalCambiosMordida = $historiaDentalCambiosMordida;
    
        return $this;
    }

    /**
     * Get historiaDentalCambiosMordida
     *
     * @return boolean 
     */
    public function getHistoriaDentalCambiosMordida()
    {
        return $this->historiaDentalCambiosMordida;
    }

    /**
     * Set historiaDentalDoloresDeCabeza
     *
     * @param boolean $historiaDentalDoloresDeCabeza
     * @return HistorialMedico
     */
    public function setHistoriaDentalDoloresDeCabeza($historiaDentalDoloresDeCabeza)
    {
        $this->historiaDentalDoloresDeCabeza = $historiaDentalDoloresDeCabeza;
    
        return $this;
    }

    /**
     * Get historiaDentalDoloresDeCabeza
     *
     * @return boolean 
     */
    public function getHistoriaDentalDoloresDeCabeza()
    {
        return $this->historiaDentalDoloresDeCabeza;
    }

    /**
     * Set historiaDentalTraumaCabeza
     *
     * @param boolean $historiaDentalTraumaCabeza
     * @return HistorialMedico
     */
    public function setHistoriaDentalTraumaCabeza($historiaDentalTraumaCabeza)
    {
        $this->historiaDentalTraumaCabeza = $historiaDentalTraumaCabeza;
    
        return $this;
    }

    /**
     * Get historiaDentalTraumaCabeza
     *
     * @return boolean 
     */
    public function getHistoriaDentalTraumaCabeza()
    {
        return $this->historiaDentalTraumaCabeza;
    }

    /**
     * Set historiaDentalArtritis
     *
     * @param boolean $historiaDentalArtritis
     * @return HistorialMedico
     */
    public function setHistoriaDentalArtritis($historiaDentalArtritis)
    {
        $this->historiaDentalArtritis = $historiaDentalArtritis;
    
        return $this;
    }

    /**
     * Get historiaDentalArtritis
     *
     * @return boolean 
     */
    public function getHistoriaDentalArtritis()
    {
        return $this->historiaDentalArtritis;
    }

    /**
     * Set historiaDentalProblemaMasticar
     *
     * @param boolean $historiaDentalProblemaMasticar
     * @return HistorialMedico
     */
    public function setHistoriaDentalProblemaMasticar($historiaDentalProblemaMasticar)
    {
        $this->historiaDentalProblemaMasticar = $historiaDentalProblemaMasticar;
    
        return $this;
    }

    /**
     * Get historiaDentalProblemaMasticar
     *
     * @return boolean 
     */
    public function getHistoriaDentalProblemaMasticar()
    {
        return $this->historiaDentalProblemaMasticar;
    }

    /**
     * Set historiaDentalRechinadoDientes
     *
     * @param boolean $historiaDentalRechinadoDientes
     * @return HistorialMedico
     */
    public function setHistoriaDentalRechinadoDientes($historiaDentalRechinadoDientes)
    {
        $this->historiaDentalRechinadoDientes = $historiaDentalRechinadoDientes;
    
        return $this;
    }

    /**
     * Get historiaDentalRechinadoDientes
     *
     * @return boolean 
     */
    public function getHistoriaDentalRechinadoDientes()
    {
        return $this->historiaDentalRechinadoDientes;
    }

    /**
     * Set historiaDentalProblemaAtm
     *
     * @param boolean $historiaDentalProblemaAtm
     * @return HistorialMedico
     */
    public function setHistoriaDentalProblemaAtm($historiaDentalProblemaAtm)
    {
        $this->historiaDentalProblemaAtm = $historiaDentalProblemaAtm;
    
        return $this;
    }

    /**
     * Get historiaDentalProblemaAtm
     *
     * @return boolean 
     */
    public function getHistoriaDentalProblemaAtm()
    {
        return $this->historiaDentalProblemaAtm;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return HistorialMedico
     */
    public function setIdexpediente(\ConnectionBDBundle\Entity\Expediente $idexpediente = null)
    {
        $this->idexpediente = $idexpediente;
    
        return $this;
    }

    /**
     * Get idexpediente
     *
     * @return \ConnectionBDBundle\Entity\Expediente 
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }
}
