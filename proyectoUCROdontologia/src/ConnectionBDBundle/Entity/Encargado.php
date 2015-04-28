<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encargado
 */
class Encargado
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
     * @var string
     */
    private $relacion;

    /**
     * @var string
     */
    private $cedula;


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
     * @return Encargado
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
     * Set relacion
     *
     * @param string $relacion
     * @return Encargado
     */
    public function setRelacion($relacion)
    {
        $this->relacion = $relacion;
    
        return $this;
    }

    /**
     * Get relacion
     *
     * @return string 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Encargado
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }
    public function __toString() {
        return $this->getNombre();
    }
}
