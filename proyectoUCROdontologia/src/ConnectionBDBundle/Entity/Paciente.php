<?php

namespace ConnectionBDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 */
class Paciente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cedula;

    /**
     * @var \DateTime
     */
    private $fechaDeIngreso;

    /**
     * @var integer
     */
    private $sexo;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ocupacion;

    /**
     * @var string
     */
    private $carne;

    /**
     * @var integer
     */
    private $apartadoPostal;

    /**
     * @var integer
     */
    private $beca;

    /**
     * @var string
     */
    private $carrera;

    /**
     * @var integer
     */
    private $estadoCivil;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefonoHabitacion;

    /**
     * @var string
     */
    private $telefonoTrabajo;

    /**
     * @var string
     */
    private $telefonoMovil;

    /**
     * @var string
     */
    private $correoElectronico;

    /**
     * @var string
     */
    private $sintoma;

    /**
     * @var \ConnectionBDBundle\Entity\Encargado
     */
    private $idencargado;

    /**
     * @var \ConnectionBDBundle\Entity\Odontologo
     */
    private $idodontologo;


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
     * Set cedula
     *
     * @param string $cedula
     * @return Paciente
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

    /**
     * Set fechaDeIngreso
     *
     * @param \DateTime $fechaDeIngreso
     * @return Paciente
     */
    public function setFechaDeIngreso($fechaDeIngreso)
    {
        $this->fechaDeIngreso = $fechaDeIngreso;
    
        return $this;
    }

    /**
     * Get fechaDeIngreso
     *
     * @return \DateTime 
     */
    public function getFechaDeIngreso()
    {
        return $this->fechaDeIngreso;
    }

    /**
     * Set sexo
     *
     * @param integer $sexo
     * @return Paciente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return integer 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Paciente
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    
        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
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
     * Set ocupacion
     *
     * @param string $ocupacion
     * @return Paciente
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    
        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set carne
     *
     * @param string $carne
     * @return Paciente
     */
    public function setCarne($carne)
    {
        $this->carne = $carne;
    
        return $this;
    }

    /**
     * Get carne
     *
     * @return string 
     */
    public function getCarne()
    {
        return $this->carne;
    }

    /**
     * Set apartadoPostal
     *
     * @param integer $apartadoPostal
     * @return Paciente
     */
    public function setApartadoPostal($apartadoPostal)
    {
        $this->apartadoPostal = $apartadoPostal;
    
        return $this;
    }

    /**
     * Get apartadoPostal
     *
     * @return integer 
     */
    public function getApartadoPostal()
    {
        return $this->apartadoPostal;
    }

    /**
     * Set beca
     *
     * @param integer $beca
     * @return Paciente
     */
    public function setBeca($beca)
    {
        $this->beca = $beca;
    
        return $this;
    }

    /**
     * Get beca
     *
     * @return integer 
     */
    public function getBeca()
    {
        return $this->beca;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Paciente
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    
        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set estadoCivil
     *
     * @param integer $estadoCivil
     * @return Paciente
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    
        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return integer 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Paciente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefonoHabitacion
     *
     * @param string $telefonoHabitacion
     * @return Paciente
     */
    public function setTelefonoHabitacion($telefonoHabitacion)
    {
        $this->telefonoHabitacion = $telefonoHabitacion;
    
        return $this;
    }

    /**
     * Get telefonoHabitacion
     *
     * @return string 
     */
    public function getTelefonoHabitacion()
    {
        return $this->telefonoHabitacion;
    }

    /**
     * Set telefonoTrabajo
     *
     * @param string $telefonoTrabajo
     * @return Paciente
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {
        $this->telefonoTrabajo = $telefonoTrabajo;
    
        return $this;
    }

    /**
     * Get telefonoTrabajo
     *
     * @return string 
     */
    public function getTelefonoTrabajo()
    {
        return $this->telefonoTrabajo;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     * @return Paciente
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;
    
        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     * @return Paciente
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
     * Set sintoma
     *
     * @param string $sintoma
     * @return Paciente
     */
    public function setSintoma($sintoma)
    {
        $this->sintoma = $sintoma;
    
        return $this;
    }

    /**
     * Get sintoma
     *
     * @return string 
     */
    public function getSintoma()
    {
        return $this->sintoma;
    }

    /**
     * Set idencargado
     *
     * @param \ConnectionBDBundle\Entity\Encargado $idencargado
     * @return Paciente
     */
    public function setIdencargado(\ConnectionBDBundle\Entity\Encargado $idencargado = null)
    {
        $this->idencargado = $idencargado;
    
        return $this;
    }

    /**
     * Get idencargado
     *
     * @return \ConnectionBDBundle\Entity\Encargado 
     */
    public function getIdencargado()
    {
        return $this->idencargado;
    }

    /**
     * Set idodontologo
     *
     * @param \ConnectionBDBundle\Entity\Odontologo $idodontologo
     * @return Paciente
     */
    public function setIdodontologo(\ConnectionBDBundle\Entity\Odontologo $idodontologo = null)
    {
        $this->idodontologo = $idodontologo;
    
        return $this;
    }

    /**
     * Get idodontologo
     *
     * @return \ConnectionBDBundle\Entity\Odontologo 
     */
    public function getIdodontologo()
    {
        return $this->idodontologo;
    }
      public function __toString() {
        return $this->getNombre(). " ".$this->getCedula();
    }
}
