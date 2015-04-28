<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diente
 */
class Diente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var boolean
     */
    private $existencia;

    /**
     * @var integer
     */
    private $tipo;

    /**
     * @var \ConnectionBDBundle\Entity\Dentadura
     */
    private $iddentadura;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Diente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set existencia
     *
     * @param boolean $existencia
     * @return Diente
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;
    
        return $this;
    }

    /**
     * Get existencia
     *
     * @return boolean 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Diente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set iddentadura
     *
     * @param \ConnectionBDBundle\Entity\Dentadura $iddentadura
     * @return Diente
     */
    public function setIddentadura(\ConnectionBDBundle\Entity\Dentadura $iddentadura = null)
    {
        $this->iddentadura = $iddentadura;
    
        return $this;
    }

    /**
     * Get iddentadura
     *
     * @return \ConnectionBDBundle\Entity\Dentadura 
     */
    public function getIddentadura()
    {
        return $this->iddentadura;
    }
}
