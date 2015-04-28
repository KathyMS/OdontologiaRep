<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VigilanciaEpidemiologica
 */
class VigilanciaEpidemiologica
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $tipoPaciente;

    /**
     * @var string
     */
    private $condicionMotora;

    /**
     * @var boolean
     */
    private $placaDentobacteriana;

    /**
     * @var float
     */
    private $placaDentobacterianaPorcentaje;

    /**
     * @var boolean
     */
    private $calculoDental;

    /**
     * @var boolean
     */
    private $cariesActiva;

    /**
     * @var integer
     */
    private $cariesActivaNumero;

    /**
     * @var boolean
     */
    private $fisurasProfundas;

    /**
     * @var integer
     */
    private $fisurasProfundasNumero;

    /**
     * @var boolean
     */
    private $restauracionesDesajustadas;

    /**
     * @var integer
     */
    private $restauracionesDesajustadasNumero;

    /**
     * @var boolean
     */
    private $sangradoEspontaneo;

    /**
     * @var boolean
     */
    private $sangradoAlSondeo;

    /**
     * @var float
     */
    private $sangradoAlSondeoPorcentaje;

    /**
     * @var boolean
     */
    private $ausenciaPiezasCaries;

    /**
     * @var integer
     */
    private $ausenciaPiezasCariesNumero;

    /**
     * @var string
     */
    private $tipoOclusion;

    /**
     * @var boolean
     */
    private $necesidadesQuirurgicas;

    /**
     * @var boolean
     */
    private $fuma;

    /**
     * @var boolean
     */
    private $instruccionesFisioterapia;

    /**
     * @var string
     */
    private $odontograma;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return VigilanciaEpidemiologica
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tipoPaciente
     *
     * @param string $tipoPaciente
     * @return VigilanciaEpidemiologica
     */
    public function setTipoPaciente($tipoPaciente)
    {
        $this->tipoPaciente = $tipoPaciente;
    
        return $this;
    }

    /**
     * Get tipoPaciente
     *
     * @return string 
     */
    public function getTipoPaciente()
    {
        return $this->tipoPaciente;
    }

    /**
     * Set condicionMotora
     *
     * @param string $condicionMotora
     * @return VigilanciaEpidemiologica
     */
    public function setCondicionMotora($condicionMotora)
    {
        $this->condicionMotora = $condicionMotora;
    
        return $this;
    }

    /**
     * Get condicionMotora
     *
     * @return string 
     */
    public function getCondicionMotora()
    {
        return $this->condicionMotora;
    }

    /**
     * Set placaDentobacteriana
     *
     * @param boolean $placaDentobacteriana
     * @return VigilanciaEpidemiologica
     */
    public function setPlacaDentobacteriana($placaDentobacteriana)
    {
        $this->placaDentobacteriana = $placaDentobacteriana;
    
        return $this;
    }

    /**
     * Get placaDentobacteriana
     *
     * @return boolean 
     */
    public function getPlacaDentobacteriana()
    {
        return $this->placaDentobacteriana;
    }

    /**
     * Set placaDentobacterianaPorcentaje
     *
     * @param float $placaDentobacterianaPorcentaje
     * @return VigilanciaEpidemiologica
     */
    public function setPlacaDentobacterianaPorcentaje($placaDentobacterianaPorcentaje)
    {
        $this->placaDentobacterianaPorcentaje = $placaDentobacterianaPorcentaje;
    
        return $this;
    }

    /**
     * Get placaDentobacterianaPorcentaje
     *
     * @return float 
     */
    public function getPlacaDentobacterianaPorcentaje()
    {
        return $this->placaDentobacterianaPorcentaje;
    }

    /**
     * Set calculoDental
     *
     * @param boolean $calculoDental
     * @return VigilanciaEpidemiologica
     */
    public function setCalculoDental($calculoDental)
    {
        $this->calculoDental = $calculoDental;
    
        return $this;
    }

    /**
     * Get calculoDental
     *
     * @return boolean 
     */
    public function getCalculoDental()
    {
        return $this->calculoDental;
    }

    /**
     * Set cariesActiva
     *
     * @param boolean $cariesActiva
     * @return VigilanciaEpidemiologica
     */
    public function setCariesActiva($cariesActiva)
    {
        $this->cariesActiva = $cariesActiva;
    
        return $this;
    }

    /**
     * Get cariesActiva
     *
     * @return boolean 
     */
    public function getCariesActiva()
    {
        return $this->cariesActiva;
    }

    /**
     * Set cariesActivaNumero
     *
     * @param integer $cariesActivaNumero
     * @return VigilanciaEpidemiologica
     */
    public function setCariesActivaNumero($cariesActivaNumero)
    {
        $this->cariesActivaNumero = $cariesActivaNumero;
    
        return $this;
    }

    /**
     * Get cariesActivaNumero
     *
     * @return integer 
     */
    public function getCariesActivaNumero()
    {
        return $this->cariesActivaNumero;
    }

    /**
     * Set fisurasProfundas
     *
     * @param boolean $fisurasProfundas
     * @return VigilanciaEpidemiologica
     */
    public function setFisurasProfundas($fisurasProfundas)
    {
        $this->fisurasProfundas = $fisurasProfundas;
    
        return $this;
    }

    /**
     * Get fisurasProfundas
     *
     * @return boolean 
     */
    public function getFisurasProfundas()
    {
        return $this->fisurasProfundas;
    }

    /**
     * Set fisurasProfundasNumero
     *
     * @param integer $fisurasProfundasNumero
     * @return VigilanciaEpidemiologica
     */
    public function setFisurasProfundasNumero($fisurasProfundasNumero)
    {
        $this->fisurasProfundasNumero = $fisurasProfundasNumero;
    
        return $this;
    }

    /**
     * Get fisurasProfundasNumero
     *
     * @return integer 
     */
    public function getFisurasProfundasNumero()
    {
        return $this->fisurasProfundasNumero;
    }

    /**
     * Set restauracionesDesajustadas
     *
     * @param boolean $restauracionesDesajustadas
     * @return VigilanciaEpidemiologica
     */
    public function setRestauracionesDesajustadas($restauracionesDesajustadas)
    {
        $this->restauracionesDesajustadas = $restauracionesDesajustadas;
    
        return $this;
    }

    /**
     * Get restauracionesDesajustadas
     *
     * @return boolean 
     */
    public function getRestauracionesDesajustadas()
    {
        return $this->restauracionesDesajustadas;
    }

    /**
     * Set restauracionesDesajustadasNumero
     *
     * @param integer $restauracionesDesajustadasNumero
     * @return VigilanciaEpidemiologica
     */
    public function setRestauracionesDesajustadasNumero($restauracionesDesajustadasNumero)
    {
        $this->restauracionesDesajustadasNumero = $restauracionesDesajustadasNumero;
    
        return $this;
    }

    /**
     * Get restauracionesDesajustadasNumero
     *
     * @return integer 
     */
    public function getRestauracionesDesajustadasNumero()
    {
        return $this->restauracionesDesajustadasNumero;
    }

    /**
     * Set sangradoEspontaneo
     *
     * @param boolean $sangradoEspontaneo
     * @return VigilanciaEpidemiologica
     */
    public function setSangradoEspontaneo($sangradoEspontaneo)
    {
        $this->sangradoEspontaneo = $sangradoEspontaneo;
    
        return $this;
    }

    /**
     * Get sangradoEspontaneo
     *
     * @return boolean 
     */
    public function getSangradoEspontaneo()
    {
        return $this->sangradoEspontaneo;
    }

    /**
     * Set sangradoAlSondeo
     *
     * @param boolean $sangradoAlSondeo
     * @return VigilanciaEpidemiologica
     */
    public function setSangradoAlSondeo($sangradoAlSondeo)
    {
        $this->sangradoAlSondeo = $sangradoAlSondeo;
    
        return $this;
    }

    /**
     * Get sangradoAlSondeo
     *
     * @return boolean 
     */
    public function getSangradoAlSondeo()
    {
        return $this->sangradoAlSondeo;
    }

    /**
     * Set sangradoAlSondeoPorcentaje
     *
     * @param float $sangradoAlSondeoPorcentaje
     * @return VigilanciaEpidemiologica
     */
    public function setSangradoAlSondeoPorcentaje($sangradoAlSondeoPorcentaje)
    {
        $this->sangradoAlSondeoPorcentaje = $sangradoAlSondeoPorcentaje;
    
        return $this;
    }

    /**
     * Get sangradoAlSondeoPorcentaje
     *
     * @return float 
     */
    public function getSangradoAlSondeoPorcentaje()
    {
        return $this->sangradoAlSondeoPorcentaje;
    }

    /**
     * Set ausenciaPiezasCaries
     *
     * @param boolean $ausenciaPiezasCaries
     * @return VigilanciaEpidemiologica
     */
    public function setAusenciaPiezasCaries($ausenciaPiezasCaries)
    {
        $this->ausenciaPiezasCaries = $ausenciaPiezasCaries;
    
        return $this;
    }

    /**
     * Get ausenciaPiezasCaries
     *
     * @return boolean 
     */
    public function getAusenciaPiezasCaries()
    {
        return $this->ausenciaPiezasCaries;
    }

    /**
     * Set ausenciaPiezasCariesNumero
     *
     * @param integer $ausenciaPiezasCariesNumero
     * @return VigilanciaEpidemiologica
     */
    public function setAusenciaPiezasCariesNumero($ausenciaPiezasCariesNumero)
    {
        $this->ausenciaPiezasCariesNumero = $ausenciaPiezasCariesNumero;
    
        return $this;
    }

    /**
     * Get ausenciaPiezasCariesNumero
     *
     * @return integer 
     */
    public function getAusenciaPiezasCariesNumero()
    {
        return $this->ausenciaPiezasCariesNumero;
    }

    /**
     * Set tipoOclusion
     *
     * @param string $tipoOclusion
     * @return VigilanciaEpidemiologica
     */
    public function setTipoOclusion($tipoOclusion)
    {
        $this->tipoOclusion = $tipoOclusion;
    
        return $this;
    }

    /**
     * Get tipoOclusion
     *
     * @return string 
     */
    public function getTipoOclusion()
    {
        return $this->tipoOclusion;
    }

    /**
     * Set necesidadesQuirurgicas
     *
     * @param boolean $necesidadesQuirurgicas
     * @return VigilanciaEpidemiologica
     */
    public function setNecesidadesQuirurgicas($necesidadesQuirurgicas)
    {
        $this->necesidadesQuirurgicas = $necesidadesQuirurgicas;
    
        return $this;
    }

    /**
     * Get necesidadesQuirurgicas
     *
     * @return boolean 
     */
    public function getNecesidadesQuirurgicas()
    {
        return $this->necesidadesQuirurgicas;
    }

    /**
     * Set fuma
     *
     * @param boolean $fuma
     * @return VigilanciaEpidemiologica
     */
    public function setFuma($fuma)
    {
        $this->fuma = $fuma;
    
        return $this;
    }

    /**
     * Get fuma
     *
     * @return boolean 
     */
    public function getFuma()
    {
        return $this->fuma;
    }

    /**
     * Set instruccionesFisioterapia
     *
     * @param boolean $instruccionesFisioterapia
     * @return VigilanciaEpidemiologica
     */
    public function setInstruccionesFisioterapia($instruccionesFisioterapia)
    {
        $this->instruccionesFisioterapia = $instruccionesFisioterapia;
    
        return $this;
    }

    /**
     * Get instruccionesFisioterapia
     *
     * @return boolean 
     */
    public function getInstruccionesFisioterapia()
    {
        return $this->instruccionesFisioterapia;
    }

    /**
     * Set odontograma
     *
     * @param string $odontograma
     * @return VigilanciaEpidemiologica
     */
    public function setOdontograma($odontograma)
    {
        $this->odontograma = $odontograma;
    
        return $this;
    }

    /**
     * Get odontograma
     *
     * @return string 
     */
    public function getOdontograma()
    {
        return $this->odontograma;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return VigilanciaEpidemiologica
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
