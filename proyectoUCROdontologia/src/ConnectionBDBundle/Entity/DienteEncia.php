<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DienteEncia
 */
class DienteEncia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $movilidad;

    /**
     * @var integer
     */
    private $nivelinsercion1;

    /**
     * @var integer
     */
    private $nivelinsercion2;

    /**
     * @var integer
     */
    private $nivelinsercion3;

    /**
     * @var integer
     */
    private $profundidad1;

    /**
     * @var integer
     */
    private $profundidad2;

    /**
     * @var integer
     */
    private $profundidad3;

    /**
     * @var integer
     */
    private $sondeo1;

    /**
     * @var integer
     */
    private $sondeo2;

    /**
     * @var integer
     */
    private $sondeo3;

    /**
     * @var integer
     */
    private $posicionencia1;

    /**
     * @var integer
     */
    private $posicionencia2;

    /**
     * @var integer
     */
    private $posicionencia3;

    /**
     * @var \ConnectionBDBundle\Entity\Diente
     */
    private $iddiente;


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
     * Set movilidad
     *
     * @param string $movilidad
     * @return DienteEncia
     */
    public function setMovilidad($movilidad)
    {
        $this->movilidad = $movilidad;
    
        return $this;
    }

    /**
     * Get movilidad
     *
     * @return string 
     */
    public function getMovilidad()
    {
        return $this->movilidad;
    }

    /**
     * Set nivelinsercion1
     *
     * @param integer $nivelinsercion1
     * @return DienteEncia
     */
    public function setNivelinsercion1($nivelinsercion1)
    {
        $this->nivelinsercion1 = $nivelinsercion1;
    
        return $this;
    }

    /**
     * Get nivelinsercion1
     *
     * @return integer 
     */
    public function getNivelinsercion1()
    {
        return $this->nivelinsercion1;
    }

    /**
     * Set nivelinsercion2
     *
     * @param integer $nivelinsercion2
     * @return DienteEncia
     */
    public function setNivelinsercion2($nivelinsercion2)
    {
        $this->nivelinsercion2 = $nivelinsercion2;
    
        return $this;
    }

    /**
     * Get nivelinsercion2
     *
     * @return integer 
     */
    public function getNivelinsercion2()
    {
        return $this->nivelinsercion2;
    }

    /**
     * Set nivelinsercion3
     *
     * @param integer $nivelinsercion3
     * @return DienteEncia
     */
    public function setNivelinsercion3($nivelinsercion3)
    {
        $this->nivelinsercion3 = $nivelinsercion3;
    
        return $this;
    }

    /**
     * Get nivelinsercion3
     *
     * @return integer 
     */
    public function getNivelinsercion3()
    {
        return $this->nivelinsercion3;
    }

    /**
     * Set profundidad1
     *
     * @param integer $profundidad1
     * @return DienteEncia
     */
    public function setProfundidad1($profundidad1)
    {
        $this->profundidad1 = $profundidad1;
    
        return $this;
    }

    /**
     * Get profundidad1
     *
     * @return integer 
     */
    public function getProfundidad1()
    {
        return $this->profundidad1;
    }

    /**
     * Set profundidad2
     *
     * @param integer $profundidad2
     * @return DienteEncia
     */
    public function setProfundidad2($profundidad2)
    {
        $this->profundidad2 = $profundidad2;
    
        return $this;
    }

    /**
     * Get profundidad2
     *
     * @return integer 
     */
    public function getProfundidad2()
    {
        return $this->profundidad2;
    }

    /**
     * Set profundidad3
     *
     * @param integer $profundidad3
     * @return DienteEncia
     */
    public function setProfundidad3($profundidad3)
    {
        $this->profundidad3 = $profundidad3;
    
        return $this;
    }

    /**
     * Get profundidad3
     *
     * @return integer 
     */
    public function getProfundidad3()
    {
        return $this->profundidad3;
    }

    /**
     * Set sondeo1
     *
     * @param integer $sondeo1
     * @return DienteEncia
     */
    public function setSondeo1($sondeo1)
    {
        $this->sondeo1 = $sondeo1;
    
        return $this;
    }

    /**
     * Get sondeo1
     *
     * @return integer 
     */
    public function getSondeo1()
    {
        return $this->sondeo1;
    }

    /**
     * Set sondeo2
     *
     * @param integer $sondeo2
     * @return DienteEncia
     */
    public function setSondeo2($sondeo2)
    {
        $this->sondeo2 = $sondeo2;
    
        return $this;
    }

    /**
     * Get sondeo2
     *
     * @return integer 
     */
    public function getSondeo2()
    {
        return $this->sondeo2;
    }

    /**
     * Set sondeo3
     *
     * @param integer $sondeo3
     * @return DienteEncia
     */
    public function setSondeo3($sondeo3)
    {
        $this->sondeo3 = $sondeo3;
    
        return $this;
    }

    /**
     * Get sondeo3
     *
     * @return integer 
     */
    public function getSondeo3()
    {
        return $this->sondeo3;
    }

    /**
     * Set posicionencia1
     *
     * @param integer $posicionencia1
     * @return DienteEncia
     */
    public function setPosicionencia1($posicionencia1)
    {
        $this->posicionencia1 = $posicionencia1;
    
        return $this;
    }

    /**
     * Get posicionencia1
     *
     * @return integer 
     */
    public function getPosicionencia1()
    {
        return $this->posicionencia1;
    }

    /**
     * Set posicionencia2
     *
     * @param integer $posicionencia2
     * @return DienteEncia
     */
    public function setPosicionencia2($posicionencia2)
    {
        $this->posicionencia2 = $posicionencia2;
    
        return $this;
    }

    /**
     * Get posicionencia2
     *
     * @return integer 
     */
    public function getPosicionencia2()
    {
        return $this->posicionencia2;
    }

    /**
     * Set posicionencia3
     *
     * @param integer $posicionencia3
     * @return DienteEncia
     */
    public function setPosicionencia3($posicionencia3)
    {
        $this->posicionencia3 = $posicionencia3;
    
        return $this;
    }

    /**
     * Get posicionencia3
     *
     * @return integer 
     */
    public function getPosicionencia3()
    {
        return $this->posicionencia3;
    }

    /**
     * Set iddiente
     *
     * @param \ConnectionBDBundle\Entity\Diente $iddiente
     * @return DienteEncia
     */
    public function setIddiente(\ConnectionBDBundle\Entity\Diente $iddiente = null)
    {
        $this->iddiente = $iddiente;
    
        return $this;
    }

    /**
     * Get iddiente
     *
     * @return \ConnectionBDBundle\Entity\Diente 
     */
    public function getIddiente()
    {
        return $this->iddiente;
    }
}
