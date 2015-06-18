<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfPaciente
 *
 * @author Calo
 */
class pdfPaciente {

    public function pdf($id) {
        include ('fpdf/fpdf.php');
        include_once('myDBC.php');

        $seleccion = new myDBC();
        /* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

        $datosReporte = $seleccion->seleccionar_datos_paciente($id);

        foreach ($datosReporte as $fila) {
           
//Datos Principales$cedula = $fila['cedula'];
            $nombre = $fila['nombre'];
            $cedula = $fila['cedula'];
            $fechaIngreso = $fila['fecha_de_ingreso'];
            $sintoma = $fila['sintoma'];
            $ocupacion = $fila['ocupacion'];
            $estadoCivil = $fila['estado_civil'];
            $edad = $fila['edad'];
            $sexo = $fila['sexo'];
            $direccion = $fila['direccion'];
//Datos de estudiante
            $beca = $fila['beca'];
            $carne = $fila['carne'];
            $carrera = $fila['carrera'];
//Datos de Contacto
            $correo = $fila['correo_electronico'];
            $telmovil = $fila['telefono_movil'];
            $telcasa = $fila['telefono_habitacion'];
            $teltrabajo = $fila['telefono_trabajo'];
            $apartadopostal = $fila['apartado_postal'];
        }
        /* seleccionamos el tipo, estilo y tama�o de la letra a utilizar */
        $pdf->SetFont('Helvetica', 'B', 14);

        $pdf->Image('bundles/administrador/img/firma-ucr-ico.jpg', 60, 10, 100, 50, 'JPG');
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Ln(50);
        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Write(7, 'Expediente Proporcionado por La Clinica Odontologica del Recinto de Paraiso');


        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->Ln(10);
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->SetFillColor(100, 200, 234);
        $pdf->Multicell(190, 7, "DATOS GENERALES DEL PACIENTE", 1, 'L', true);

        $pdf->SetTextColor('0', '0', '0'); //para imprimir en negro
        $pdf->Ln();
        $pdf->Write(7, 'Nombre: ' . $nombre);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Cedula: ' . $cedula);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Fecha Ingreso: ' . $fechaIngreso);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Sintoma: ' . $sintoma);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Ocupacion: ' . $ocupacion);
        $pdf->Ln(); //salto de linea
        if ($estadoCivil == 1) {
            $pdf->Write(7, 'Estado Civil: Soltero');
        } else if ($estadoCivil == 2) {
            $pdf->Write(7, 'Estado Civil: Casado');
        } else if ($estadoCivil == 3) {
            $pdf->Write(7, 'Estado Civil: Divorciado');
        } else {
            $pdf->Write(7, 'Estado Civil: Viudo');
        }
        $pdf->Ln(); //salto de linea
        $pdf->Write(7,'Edad: ' . $edad);
        if ($sexo == 1) {
            $pdf->Write(7, 'Sexo: Masculino');
        } else {
            $pdf->Write(7, 'Sexo: Femenino');
        }
        $pdf->Ln(); //ahora salta
        $pdf->Write(7, 'Direccion: ' . $direccion);
        $pdf->Ln(10); //ahora salta

        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Multicell(190, 7, "SI SE ES ESTUDIANTE", 1, 'L', true);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Ln(); //ahora salta
        $pdf->Write(7, 'Beca: ' . $beca);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Carne: ' . $carne);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Carrera: ' . $carrera);
        $pdf->Ln(10); //salto de linea

        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Multicell(190, 7, "INFORMACION PARA CONTACTO", 1, 'L', true);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Correo: ' . $correo);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Tel. Movil: ' . $telmovil);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Tel. Casa: ' . $telcasa);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Tel. Trabajo: ' . $teltrabajo);
        $pdf->Ln(); //salto de linea
        $pdf->Write(7, 'Apartado Postal: ' . $apartadopostal);

        ob_end_clean();
        //$pdf->Output("prueba.pdf", 'D');
//echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>"; //para ver el archivo pdf generado
        //header("Cache-Control: cache, must-revalidate");
//        header("Pragma: public");
//        header("Content-Type: application/force-download");
//        header("Content-Disposition: attachment; filename=\"menu.pdf\"");
        $output=$pdf->output();
        file_put_contents($id.'.pdf', $output);

    }

}
