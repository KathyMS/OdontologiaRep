<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenRadiologico
 */
class ExamenRadiologico
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $crestaAlveolar;

    /**
     * @var string
     */
    private $laminaDura;

    /**
     * @var string
     */
    private $membranaPeriodontal;

    /**
     * @var string
     */
    private $calculo;

    /**
     * @var string
     */
    private $caries;

    /**
     * @var string
     */
    private $retauracionesDentales;

    /**
     * @var string
     */
    private $furcaciones;

    /**
     * @var string
     */
    private $anomaliasDentales;

    /**
     * @var string
     */
    private $patologiasMaxilares;

    /**
     * @var string
     */
    private $morfologiaRadicular;

    /**
     * @var string
     */
    private $coronaRaizHuesoRematente;

    /**
     * @var string
     */
    private $tercerosMolares;

    /**
     * @var string
     */
    private $secuenciaErupcion;

    /**
     * @var string
     */
    private $comentarios;

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
     * Set crestaAlveolar
     *
     * @param string $crestaAlveolar
     * @return ExamenRadiologico
     */
    public function setCrestaAlveolar($crestaAlveolar)
    {
        $this->crestaAlveolar = $crestaAlveolar;
    
        return $this;
    }

    /**
     * Get crestaAlveolar
     *
     * @return string 
     */
    public function getCrestaAlveolar()
    {
        return $this->crestaAlveolar;
    }

    /**
     * Set laminaDura
     *
     * @param string $laminaDura
     * @return ExamenRadiologico
     */
    public function setLaminaDura($laminaDura)
    {
        $this->laminaDura = $laminaDura;
    
        return $this;
    }

    /**
     * Get laminaDura
     *
     * @return string 
     */
    public function getLaminaDura()
    {
        return $this->laminaDura;
    }

    /**
     * Set membranaPeriodontal
     *
     * @param string $membranaPeriodontal
     * @return ExamenRadiologico
     */
    public function setMembranaPeriodontal($membranaPeriodontal)
    {
        $this->membranaPeriodontal = $membranaPeriodontal;
    
        return $this;
    }

    /**
     * Get membranaPeriodontal
     *
     * @return string 
     */
    public function getMembranaPeriodontal()
    {
        return $this->membranaPeriodontal;
    }

    /**
     * Set calculo
     *
     * @param string $calculo
     * @return ExamenRadiologico
     */
    public function setCalculo($calculo)
    {
        $this->calculo = $calculo;
    
        return $this;
    }

    /**
     * Get calculo
     *
     * @return string 
     */
    public function getCalculo()
    {
        return $this->calculo;
    }

    /**
     * Set caries
     *
     * @param string $caries
     * @return ExamenRadiologico
     */
    public function setCaries($caries)
    {
        $this->caries = $caries;
    
        return $this;
    }

    /**
     * Get caries
     *
     * @return string 
     */
    public function getCaries()
    {
        return $this->caries;
    }

    /**
     * Set retauracionesDentales
     *
     * @param string $retauracionesDentales
     * @return ExamenRadiologico
     */
    public function setRetauracionesDentales($retauracionesDentales)
    {
        $this->retauracionesDentales = $retauracionesDentales;
    
        return $this;
    }

    /**
     * Get retauracionesDentales
     *
     * @return string 
     */
    public function getRetauracionesDentales()
    {
        return $this->retauracionesDentales;
    }

    /**
     * Set furcaciones
     *
     * @param string $furcaciones
     * @return ExamenRadiologico
     */
    public function setFurcaciones($furcaciones)
    {
        $this->furcaciones = $furcaciones;
    
        return $this;
    }

    /**
     * Get furcaciones
     *
     * @return string 
     */
    public function getFurcaciones()
    {
        return $this->furcaciones;
    }

    /**
     * Set anomaliasDentales
     *
     * @param string $anomaliasDentales
     * @return ExamenRadiologico
     */
    public function setAnomaliasDentales($anomaliasDentales)
    {
        $this->anomaliasDentales = $anomaliasDentales;
    
        return $this;
    }

    /**
     * Get anomaliasDentales
     *
     * @return string 
     */
    public function getAnomaliasDentales()
    {
        return $this->anomaliasDentales;
    }

    /**
     * Set patologiasMaxilares
     *
     * @param string $patologiasMaxilares
     * @return ExamenRadiologico
     */
    public function setPatologiasMaxilares($patologiasMaxilares)
    {
        $this->patologiasMaxilares = $patologiasMaxilares;
    
        return $this;
    }

    /**
     * Get patologiasMaxilares
     *
     * @return string 
     */
    public function getPatologiasMaxilares()
    {
        return $this->patologiasMaxilares;
    }

    /**
     * Set morfologiaRadicular
     *
     * @param string $morfologiaRadicular
     * @return ExamenRadiologico
     */
    public function setMorfologiaRadicular($morfologiaRadicular)
    {
        $this->morfologiaRadicular = $morfologiaRadicular;
    
        return $this;
    }

    /**
     * Get morfologiaRadicular
     *
     * @return string 
     */
    public function getMorfologiaRadicular()
    {
        return $this->morfologiaRadicular;
    }

    /**
     * Set coronaRaizHuesoRematente
     *
     * @param string $coronaRaizHuesoRematente
     * @return ExamenRadiologico
     */
    public function setCoronaRaizHuesoRematente($coronaRaizHuesoRematente)
    {
        $this->coronaRaizHuesoRematente = $coronaRaizHuesoRematente;
    
        return $this;
    }

    /**
     * Get coronaRaizHuesoRematente
     *
     * @return string 
     */
    public function getCoronaRaizHuesoRematente()
    {
        return $this->coronaRaizHuesoRematente;
    }

    /**
     * Set tercerosMolares
     *
     * @param string $tercerosMolares
     * @return ExamenRadiologico
     */
    public function setTercerosMolares($tercerosMolares)
    {
        $this->tercerosMolares = $tercerosMolares;
    
        return $this;
    }

    /**
     * Get tercerosMolares
     *
     * @return string 
     */
    public function getTercerosMolares()
    {
        return $this->tercerosMolares;
    }

    /**
     * Set secuenciaErupcion
     *
     * @param string $secuenciaErupcion
     * @return ExamenRadiologico
     */
    public function setSecuenciaErupcion($secuenciaErupcion)
    {
        $this->secuenciaErupcion = $secuenciaErupcion;
    
        return $this;
    }

    /**
     * Get secuenciaErupcion
     *
     * @return string 
     */
    public function getSecuenciaErupcion()
    {
        return $this->secuenciaErupcion;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return ExamenRadiologico
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    
        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return ExamenRadiologico
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
