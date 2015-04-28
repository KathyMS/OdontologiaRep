<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsentimientoInformado
 */
class ConsentimientoInformado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $rutaImagen;

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
     * Set rutaImagen
     *
     * @param string $rutaImagen
     * @return ConsentimientoInformado
     */
    public function setRutaImagen($rutaImagen)
    {
        $this->rutaImagen = $rutaImagen;
    
        return $this;
    }

    /**
     * Get rutaImagen
     *
     * @return string 
     */
    public function getRutaImagen()
    {
        return $this->rutaImagen;
    }

    /**
     * Set idexpediente
     *
     * @param \ConnectionBDBundle\Entity\Expediente $idexpediente
     * @return ConsentimientoInformado
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
