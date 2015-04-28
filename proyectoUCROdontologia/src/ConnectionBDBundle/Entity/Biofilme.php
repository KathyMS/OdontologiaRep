<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biofilme
 */
class Biofilme
{
    /**
     * @var integer
     */
    private $posicion;

    /**
     * @var boolean
     */
    private $placa;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $iddiente;

    /**
     * @var \ConnectionBDBundle\Entity\Diente
     */
    private $id;


    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return Biofilme
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set placa
     *
     * @param boolean $placa
     * @return Biofilme
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return boolean 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Biofilme
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
     * Set iddiente
     *
     * @param integer $iddiente
     * @return Biofilme
     */
    public function setIddiente($iddiente)
    {
        $this->iddiente = $iddiente;
    
        return $this;
    }

    /**
     * Get iddiente
     *
     * @return integer 
     */
    public function getIddiente()
    {
        return $this->iddiente;
    }

    /**
     * Set id
     *
     * @param \ConnectionBDBundle\Entity\Diente $id
     * @return Biofilme
     */
    public function setId(\ConnectionBDBundle\Entity\Diente $id = null)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return \ConnectionBDBundle\Entity\Diente 
     */
    public function getId()
    {
        return $this->id;
    }
}
