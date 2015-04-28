<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TratamientoGeneral
 */
class TratamientoGeneral
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreTratamiento;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set nombreTratamiento
     *
     * @param string $nombreTratamiento
     * @return TratamientoGeneral
     */
    public function setNombreTratamiento($nombreTratamiento)
    {
        $this->nombreTratamiento = $nombreTratamiento;
    
        return $this;
    }

    /**
     * Get nombreTratamiento
     *
     * @return string 
     */
    public function getNombreTratamiento()
    {
        return $this->nombreTratamiento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TratamientoGeneral
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
