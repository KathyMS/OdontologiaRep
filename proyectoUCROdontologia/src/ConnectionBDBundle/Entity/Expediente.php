<?php

namespace ConnectionBDBundle\Entity;

use ConnectionBDBundle\Entity\Paciente;
use ConnectionBDBundle\Form\PacienteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

/* * KATHERINE
 * Expediente
 */

class Expediente {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ConnectionBDBundle\Entity\Paciente
     */
    private $idpaciente;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idpaciente
     *
     * @param \ConnectionBDBundle\Entity\Paciente $idpaciente
     * @return Expediente
     */
    public function setIdpaciente(\ConnectionBDBundle\Entity\Paciente $idpaciente = null) {
        $this->idpaciente = $idpaciente;

        return $this;
    }

    /**
     * Get idpaciente
     *
     * @return \ConnectionBDBundle\Entity\Paciente 
     */
    public function getIdpaciente() {
        return $this->idpaciente;
    }

    public function __toString() {
   
       return $this->getIdpaciente()->getNombre(). " ".$this->getIdpaciente()->getCedula();
    }
    


}
