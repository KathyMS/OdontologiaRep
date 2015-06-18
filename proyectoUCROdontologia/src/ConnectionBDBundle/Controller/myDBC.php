<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myDBC
 *
 * @author Calo
 */
class myDBC {
     public $mysqli = null;

    public function __construct() {

        include_once "dbconfig.php";
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if ($this->mysqli->connect_errno) {
            echo "Error MySQLi: (" & nbsp . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }

    

    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }

    public function seleccionar_datos_paciente($id) {
        $q = 'select id,cedula,fecha_de_ingreso, sexo,edad, nombre, ocupacion, carne, apartado_postal,beca,
            carrera, estado_civil, direccion, telefono_habitacion, telefono_trabajo, telefono_movil, correo_electronico,
            sintoma from paciente where id ='.$id;

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if ($result->num_rows == 0) {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
    
     public function seleccionar_datos_historial_medico($id) {
        $q = 'select * from historial_medico where id ='.$id;

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if ($result->num_rows == 0) {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
         public function seleccionar_examen_radiologico($id) {
        $q = 'select * from examen_radiologico where id ='.$id;

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if ($result->num_rows == 0) {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
    public function seleccionar_odontologo($id) {
        $q = 'select * from odontologo where id ='.$id;

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if ($result->num_rows == 0) {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
}

