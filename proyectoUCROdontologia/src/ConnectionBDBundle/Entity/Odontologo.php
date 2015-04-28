<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Odontologo
 */
class Odontologo
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
    private $telefono;

    /**
     * @var string
     */
    private $correoElectronico;

    /**
     * @var boolean
     */
    private $practicante;

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
     * @return Odontologo
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
     * Set telefono
     *
     * @param string $telefono
     * @return Odontologo
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     * @return Odontologo
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
    
        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string 
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set practicante
     *
     * @param boolean $practicante
     * @return Odontologo
     */
    public function setPracticante($practicante)
    {
        $this->practicante = $practicante;
    
        return $this;
    }

    /**
     * Get practicante
     *
     * @return boolean 
     */
    public function getPracticante()
    {
        return $this->practicante;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Odontologo
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
