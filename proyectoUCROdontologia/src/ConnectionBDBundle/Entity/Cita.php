<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cita
 */
class Cita
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
     * @var \DateTime
     */
    private $hora;

    /**
     * @var \ConnectionBDBundle\Entity\Paciente
     */
    private $idpaciente;


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
     * @return Cita
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
     * Set hora
     *
     * @param \DateTime $hora
     * @return Cita
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    
        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set idpaciente
     *
     * @param \ConnectionBDBundle\Entity\Paciente $idpaciente
     * @return Cita
     */
    public function setIdpaciente(\ConnectionBDBundle\Entity\Paciente $idpaciente = null)
    {
        $this->idpaciente = $idpaciente;
    
        return $this;
    }

    /**
     * Get idpaciente
     *
     * @return \ConnectionBDBundle\Entity\Paciente 
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }
}
