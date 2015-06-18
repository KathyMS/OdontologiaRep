<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EncargadoPdf
 *
 * @author Calo
 */
class OdontologoPdf {

    public function pdf($id) {
        include ('fpdf/fpdf.php');
        include_once('myDBC.php');

        $seleccion = new myDBC();
        /* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

        $datosReporte = $seleccion->seleccionar_odontologo($id);

        foreach ($datosReporte as $fila) {
            $nombre = $fila['nombre'];
            $telefono = $fila['telefono'];
            $cedula = $fila['cedula'];
            $practicante = $fila['practicante'];
            $correo_electronico = $fila['correo_electronico'];
        }
        /* seleccionamos el tipo, estilo y tama�o de la letra a utilizar */
        $pdf->SetFont('Helvetica', 'B', 14);

        $pdf->Image('bundles/administrador/img/firma-ucr-ico.jpg', 60, 10, 100, 50, 'JPG');
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Ln(50);
        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Write(7, 'Informacion Proporcionada por La Clinica Odontologica del Recinto de Paraiso');


        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->Ln(10);
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->SetFillColor(100, 200, 234);
        $pdf->Multicell(190, 7, "Informacion del Odontologo", 1, 'L', true);
                $pdf->Ln();

        $pdf->SetTextColor('0', '0', '0'); //para imprimir en negro
        $pdf->Write(7, 'Nombre: ' . $nombre);
        $pdf->Ln();
        $pdf->Write(7, 'Telefono: ' . $telefono);
        $pdf->Ln();
        $pdf->Write(7, 'Correo: ' . $correo_electronico);
        $pdf->Ln();
        if ($practicante == 1) {
            $pdf->Write(7, 'Practicate: Si');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Practicate: No');
            $pdf->Ln();
        }
        $pdf->Write(7, 'Cedula: ' . $cedula);
        $pdf->Ln();

        ob_end_clean();
        $output = $pdf->output();
        file_put_contents($id . '.pdf', $output);
    }

}
