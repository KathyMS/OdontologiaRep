<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExamenRadioLogicoPdf
 *
 * @author Calo
 */
class ExamenRadioLogicoPdf {

    public function pdf($id) {
        include ('fpdf/fpdf.php');
        include_once('myDBC.php');

        $seleccion = new myDBC();
        /* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

        $datosReporte = $seleccion->seleccionar_examen_radiologico($id);

        foreach ($datosReporte as $fila) {
            $crestaAlveolar = $fila['cresta_alveolar'];
            $lamina_dura = $fila['lamina_dura'];
            $membrana_periodontal = $fila['membrana_periodontal'];
            $calculo = $fila['calculo'];
            $caries = $fila['caries'];
            //$restauraciones_dentales = $fila['restauraciones_dentales'];
            //$furcaciones = $fila['$furcaciones'];
            $anomalias_dentales = $fila['anomalias_dentales'];
            $patologias_maxilares = $fila['patologias_maxilares'];
            $morfologia_radicular = $fila['morfologia_radicular'];
            $corona = $fila['corona_raiz_hueso_rematente'];
            $terceros_molares = $fila['terceros_molares'];
            $secuencia_erupcion = $fila['secuencia_erupcion'];
            $comentarios = $fila['comentarios'];
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
        $pdf->Multicell(190, 7, "Examen radiologico", 1, 'L', true);

        $pdf->SetTextColor('0', '0', '0'); //para imprimir en negro
        $pdf->Write(7, 'Cresta Alveolar: ' . $crestaAlveolar);
        $pdf->Ln();
        $pdf->Write(7, 'Lamina Dura: ' . $lamina_dura);
        $pdf->Ln();
        $pdf->Write(7, 'Espacion Membrana Periodontal: ' . $membrana_periodontal);
        $pdf->Ln();
        $pdf->Write(7, 'Calculo: ' . $calculo);
        $pdf->Ln();
        $pdf->Write(7, 'Caries: ' . $caries);
        $pdf->Ln();
//        $pdf->Write(7, 'Restauraciones Dentales: ' . $restauraciones_dentales);
//        $pdf->Ln();
//        $pdf->Write(7, 'Condiciones de Furcaciones: ' . $furcaciones);
//        $pdf->Ln();
        $pdf->Write(7, 'Anomalias Dentales: ' . $anomalias_dentales);
        $pdf->Ln();
        $pdf->Write(7, 'Patologias Maxilares: ' . $patologias_maxilares);
        $pdf->Ln();
        $pdf->Write(7, 'Morfologia Radicular: ' . $morfologia_radicular);
        $pdf->Ln();
        $pdf->Write(7, 'Relacion corona-raiz/hueso remanente: ' . $corona);
        $pdf->Ln();
        $pdf->Write(7, 'Terceros Molares: ' . $terceros_molares);
        $pdf->Ln();
        $pdf->Write(7, 'Secuencia erupcion: ' . $secuencia_erupcion);
        $pdf->Ln();
        $pdf->Write(7, 'Comentarios: ' . $comentarios);
        $pdf->Ln();


        ob_end_clean();
        $output = $pdf->output();
        file_put_contents($id . '.pdf', $output);
    }

}
