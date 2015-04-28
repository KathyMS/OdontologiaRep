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

    ///
    public function __toString() {
        $paciente = $this->idpaciente;
        //return $this->getId()."";
        return $this->Buscar($paciente);
    }

    public function Buscar($id) {
        printf("Entra Metodo");

        $conn = new \mysqli("163.178.107.130:3306", "adm", "saucr.092", "u-dental");

        $sql = 'SELECT nombre, cedula FROM paciente WHERE id = "1" ';
        //LIKE '%" . $id . "%'
        $sentencia = $conn->prepare($sql);

        if (!$sentencia) {
            printf("Could not run query");
            echo 'Could not run query: ' . mysql_error();
        } else {
            printf("Connection works");
        }

        while ($row = mysql_fetch_array($sentencia, MYSQL_ASSOC)) {
            echo "Nombre :{$row['nombre']}";
            
        }


        /*$resultado = mysqli_fetch_assoc($sentencia);
        printf(resultado['nombre']);
        $nombre = $resultado['nombre'];
        $cedula = $resultado['cedula'];

//        $em = $this->getDoctrine->getManager();
//        $entity = $em->getRepository('ConnectionBDBundle\Entity\Paciente')->find($id);
        // >getNombre(). " ".$this->getCedula();
        return $nombre ." ";*/
    }

}
