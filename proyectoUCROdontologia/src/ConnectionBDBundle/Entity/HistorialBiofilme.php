<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialBiofilme
 */
class HistorialBiofilme
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
     * @var integer
     */
    private $porcientoPlaca;

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
     * @return HistorialBiofilme
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
     * Set porcientoPlaca
     *
     * @param integer $porcientoPlaca
     * @return HistorialBiofilme
     */
    public function setPorcientoPlaca($porcientoPlaca)
    {
        $this->porcientoPlaca = $porcientoPlaca;
    
        return $this;
    }

    /**
     * Get porcientoPlaca
     *
     * @return integer 
     */
    public function getPorcientoPlaca()
    {
        return $this->porcientoPlaca;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return HistorialBiofilme
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
