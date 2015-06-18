<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HistorialMedicoPdf
 *
 * @author Calo
 */
class HistorialMedicoPdf {

    public function pdf($id) {
        include ('fpdf/fpdf.php');
        include_once('myDBC.php');
        /* tenemos que generar una instancia de la clase */
        $seleccion = new myDBC();
        /* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

        $datosReporte = $seleccion->seleccionar_datos_historial_medico($id);

        $pdf = new FPDF();
        $pdf->AddPage();
        $id = 0;
        foreach ($datosReporte as $fila) {
            $id = $fila['idExpediente'];
            $dolorCabezaFrecuente = $fila['dolor_cabeza_frecuente'];
            //$historialDental = $fila['historial_dental'];
            $vertigo = $fila['vertigo'];
            $desmayo = $fila['desmayo'];
            $perdidaDeConsiencia = $fila['perdida_de_consiencia'];
            $problemasVisules = $fila['problemas_visules'];
            $problemasAuditivos = $fila['problemas_auditivos'];
            $sinusitis = $fila['sinusitis'];
            $obstruccionNasal = $fila['obstruccion_nasal'];
            $problemasTiroides = $fila['problemas_tiroides'];
            $diabetes = $fila['diabetes'];
            $cambiosInesperadosPeso = $fila['cambios_inesperados_peso'];
            $disnea = $fila['disnea'];
            $tos = $fila['tos'];
            $tuberculosis = $fila['tuberculosis'];
            $enfisema_pulmonar = $fila['enfisema_pulmonar'];
            $asma = $fila['asma'];
            $infarto_miocardio = $fila['infarto_miocardio'];
            $insuficiencia_cadiaca = $fila['insuficiencia_cadiaca'];
            $hipertensionArterial = $fila['hipertension_arterial'];
            $anginaDePecho = $fila['angina_de_pecho'];
            $soploCardiaco = $fila['soplo_cardiaco'];
            $fiebreReumatica = $fila['fiebre_reumatica'];
            $lesionesCardiacasCongenitas = $fila['lesiones_cardiacas_congenitas'];
            $valvulasCardicasArtificiales = $fila['valvulas_cardicas_artificiales'];
            $anemia = $fila['anemia'];
            $tranfisiones = $fila['tranfisiones'];
            $trobosis = $fila['trobosis'];
            $anomalisasDeCelulasSangineas = $fila['anomalisas_de_celulas_sangineas'];
            $hepatitis = $fila['hepatitis'];
            $ictericia = $fila['ictericia'];
            $ulceraGastrica = $fila['ulcera_gastrica'];
            $enfermedadDeTramisionSexual = $fila['enfermedad_de_tramision_sexual'];
            $vih = $fila['VIH'];
            $paralisis = $fila['paralisis'];
            $depresion = $fila['depresion'];
            $nerviosismo = $fila['nerviosismo'];
            $tension = $fila['tension'];
            $convulsiones = $fila['convulsiones'];
            $hemorragias = $fila['hemorragias'];
            $artritis = $fila['artritis'];
            $reumatismo = $fila['reumatismo'];
            $transplantes = $fila['transplantes'];
            $alteracionesEnRinones = $fila['alteraciones_en_rinones'];
            $intolerancia_a_alimentos = $fila['intolerancia_a_alimentos'];
            $mialgias = $fila['mialgias'];
            $limitaionesDeMovimiento = $fila['limitaiones_de_movimiento'];
            $trumatismoEnLaCara = $fila['trumatismo_en_la_cara'];
            $amigdalitis = $fila['amigdalitis'];
            $cancer = $fila['cancer'];
            $leucemia = $fila['leucemia'];
            $embarazo = $fila['embarazo'];
            $aa = $fila['AA'];
            $aq = $fila['AQ'];
            $medicamentos = $fila['medicamentos'];
            $historialFamiliarAfp = $fila['historial_familiar_AFP'];
            $historialFamiliarAfnp = $fila['historial_familiar_AFNP'];

            $historialSocialTipoDieta = $fila['historial_social_tipo_dieta'];
            $historialSocialTabaquismo = $fila['historial_social_tabaquismo'];
            $historialSocialAlcoholismo = $fila['historial_social_alcoholismo'];
            $historialSocialConsumoDrogas = $fila['historial_social_consumo_drogas'];

            $historiaDentalUltimaVisita = $fila['historia_dental_ultima_visita'];
            $historiaDentalTratamientoRecibido = $fila['historia_dental_tratamiento_recibido'];
            $historiaDentalUltimaRadiografia = $fila['historia_dental_ultima_radiografia'];
            $historiaDentalReaccionesAnestecia = $fila['historia_dental_reacciones_anestecia'];
            $historiaDentalExperienciasDesagradables = $fila['historia_dental_experiencias_desagradables'];
            $historiaDentalFrecuendiaCepillado = $fila['historia_dental_frecuendia_cepillado'];
            $historiaDentalTipoCepillo = $fila['historia_dental_tipo_cepillo'];
            $historiaDentalTecnicaCepillo = $fila['historia_dental_tecnica_cepillo'];
            $historiaDentalTipoHiloDental = $fila['historia_dental_tipo_hilo_dental'];
            $historiaDentalEnguajeBucal = $fila['historia_dental_enguaje_bucal'];
            $historiaDentalDificultadParaAbrirBoca = $fila['historia_dental_dificultad_para_abrir_boca'];
            $historiaDentalRuidoMandubula = $fila['historia_dental_ruido_mandubula'];
            $historiaDentalDislocamientoMandubula = $fila['historia_dental_dislocamiento_mandubula'];
            $historiaDentalDolorOido = $fila['historia_dental_dolor_oido'];
            $historiaDentalDolorMasticar = $fila['historia_dental_dolor_masticar'];
            $historiaDentalCambiosMordida = $fila['historia_dental_cambios_mordida'];
            $historiaDentalDoloresDeCabeza = $fila['historia_dental_dolores_de_cabeza'];
            $historiaDentalTraumaCabeza = $fila['historia_dental_trauma_cabeza'];
            $historiaDentalArtritis = $fila['historia_dental_artritis'];
            $historiaDentalProblemaMasticar = $fila['historia_dental_problema_masticar'];
            $historiaDentalRechinadoDientes = $fila['historia_dental_rechinado_dientes'];
            $historiaDentalProblemaAtm = $fila['historia_dental_problema_atm'];
        }

        /* seleccionamos el tipo, estilo y tama�o de la letra a utilizar */
        $pdf->SetFont('Helvetica', 'B', 14);

        $pdf->Image('bundles/administrador/img/firma-ucr-ico.jpg', 60, 10, 100, 50, 'JPG');
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Ln(50);
        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Write(7, 'Expediente Proporcionado por la Clinica Odontologica del Recinto de Paraiso');
        $pdf->Ln(10);

        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->Write(7, "Sufre alguna de los siguientes condiciones?");
        $pdf->Ln();
        
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->SetFillColor(100, 200, 234);
        $pdf->SetFont('Helvetica', 'B', 18);
        $pdf->Multicell(190, 7, "Historia Medica", 1, 'L', true);
        $pdf->Ln();
//************************************************************************************+
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en negro 
         $pdf->SetFont('Helvetica', 'B', 14);
         
        if ($dolorCabezaFrecuente == 1) {
            $pdf->Write(7, 'Dolor de Cabeza Frecuente: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dolor de Cabeza Frecuente: NO');
            $pdf->Ln();
        }
        if ($vertigo == 1) {
            $pdf->Write(7, 'Vertigo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Vertigo: NO');
            $pdf->Ln();
        }
        if ($desmayo == 1) {
            $pdf->Write(7, 'Desmayo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Desmayo: NO');
            $pdf->Ln();
        }
        if ($perdidaDeConsiencia == 1) {
            $pdf->Write(7, 'Perdida de Consciencia: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Perdida de Consciencia: NO');
            $pdf->Ln();
        }
        if ($problemasVisules == 1) {
            $pdf->Write(7, 'Problemas Visuales: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Problemas Visuales: NO');
            $pdf->Ln();
        }
        if ($problemasAuditivos == 1) {
            $pdf->Write(7, 'Problemas Auditivos: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Problemas Auditivos: NO');
            $pdf->Ln();
        }
        if ($sinusitis == 1) {
            $pdf->Write(7, 'Sinisitis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Sinisitis: NO');
            $pdf->Ln();
        }
        if ($obstruccionNasal == 1) {
            $pdf->Write(7, 'Obstruccion Nasal: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Obstruccion Nasal: NO');
            $pdf->Ln();
        }
        if ($problemasTiroides == 1) {
            $pdf->Write(7, 'Problema de Tiroides: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Problema de Tiroides: NO');
            $pdf->Ln();
        }
        if ($diabetes == 1) {
            $pdf->Write(7, 'Diabetes: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Diabetes: NO');
            $pdf->Ln();
        }
        if ($cambiosInesperadosPeso == 1) {
            $pdf->Write(7, 'DCambios Inesperados de Peso: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Cambios Inesperados de Peso: NO');
            $pdf->Ln();
        }
        if ($insuficiencia_cadiaca == 1) {
            $pdf->Write(7, 'Insuficiencia Cardiaca: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Insuficiencia Cardiaca: NO');
            $pdf->Ln();
        }
        if ($disnea == 1) {
            $pdf->Write(7, 'Disnea: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Disnea: NO');
            $pdf->Ln();
        }
        if ($tos == 1) {
            $pdf->Write(7, 'Tos: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Tos: NO');
            $pdf->Ln();
        }
        if ($tuberculosis == 1) {
            $pdf->Write(7, 'Tubercolosis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Tubercolosis: NO');
            $pdf->Ln();
        }
        if ($enfisema_pulmonar == 1) {
            $pdf->Write(7, 'Efisema Pulmonar: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Efisema Pulmonar: NO');
            $pdf->Ln();
        }
        if ($asma == 1) {
            $pdf->Write(7, 'Asma: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Asma: NO');
            $pdf->Ln();
        }
        if ($infarto_miocardio == 1) {
            $pdf->Write(7, 'Infarto al Miocardio: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Infarto al Miocardio: NO');
            $pdf->Ln();
        }
        if ($hipertensionArterial == 1) {
            $pdf->Write(7, 'Hipertension Arterial: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Hipertension Arterial: NO');
            $pdf->Ln();
        }
        if ($anginaDePecho == 1) {
            $pdf->Write(7, 'Angina de Pecho: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Angina de Pecho: NO');
            $pdf->Ln();
        }
        if ($soploCardiaco == 1) {
            $pdf->Write(7, 'Soplo Cardiaco: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Soplo Cardiaco: NO');
            $pdf->Ln();
        }
        if ($fiebreReumatica == 1) {
            $pdf->Write(7, 'Fiebre Reumatica: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Fiebre Reumatica: NO');
            $pdf->Ln();
        }
        if ($lesionesCardiacasCongenitas == 1) {
            $pdf->Write(7, 'Lesiones Cardiacas Congenitas: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Lesiones Cardiacas Congenitas: NO');
            $pdf->Ln();
        }
        if ($valvulasCardicasArtificiales == 1) {
            $pdf->Write(7, 'Valvulas Cardiacas Artificiales: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Valvulas Cardiacas Artificiales: NO');
            $pdf->Ln();
        }
        if ($anemia == 1) {
            $pdf->Write(7, 'Anemia: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Anemia: NO');
            $pdf->Ln();
        }
        if ($tranfisiones == 1) {
            $pdf->Write(7, 'Transfusiones: ' . $tranfisiones);
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Transfusiones: ' . $tranfisiones);
            $pdf->Ln();
        }
        if ($trobosis == 1) {
            $pdf->Write(7, 'Trombosis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Trombosis: NO');
            $pdf->Ln();
        }
        if ($anomalisasDeCelulasSangineas == 1) {
            $pdf->Write(7, 'Anomalias de Celulas Sanguineas: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Anomalias de Celulas Sanguineas: NO');
            $pdf->Ln();
        }
        if ($hepatitis == 1) {
            $pdf->Write(7, 'Hepatitis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Hepatitis: NO');
            $pdf->Ln();
        }
        if ($ictericia == 1) {
            $pdf->Write(7, 'Icteria: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Icteria: NO');
            $pdf->Ln();
        }
        if ($ulceraGastrica == 1) {
            $pdf->Write(7, 'Ulceras Gastricas: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Ulceras Gastricas: NO');
            $pdf->Ln();
        }
        if ($enfermedadDeTramisionSexual == 1) {
            $pdf->Write(7, 'Enfermedad de Transmision sexual: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Enfermedad de Transmision sexual: NO');
            $pdf->Ln();
        }
        if ($vih == 1) {
            $pdf->Write(7, 'VIH: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'VIH: NO');
            $pdf->Ln();
        }
        if ($paralisis == 1) {
            $pdf->Write(7, 'Paralisis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Paralisis: NO');
            $pdf->Ln();
        }
        if ($depresion == 1) {
            $pdf->Write(7, 'Depresion: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Depresion: NO');
            $pdf->Ln();
        }
        if ($nerviosismo == 1) {
            $pdf->Write(7, 'Nerviosismo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Nerviosismo: NP');
            $pdf->Ln();
        }
        if ($tension == 1) {
            $pdf->Write(7, 'Tension: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Tension: NO');
            $pdf->Ln();
        }
        if ($convulsiones == 1) {
            $pdf->Write(7, 'Convulsiones: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Convulsiones: NO');
            $pdf->Ln();
        }
        if ($hemorragias == 1) {
            $pdf->Write(7, 'Hemorragias: ' . $hemorragias);
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Hemorragias: ' . $hemorragias);
            $pdf->Ln();
        }
        if ($artritis == 1) {
            $pdf->Write(7, 'Artritis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Artritis: NO');
            $pdf->Ln();
        }
        if ($reumatismo == 1) {
            $pdf->Write(7, 'Reumatismo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Reumatismo: NO');
            $pdf->Ln();
        }
        if ($transplantes == 1) {
            $pdf->Write(7, 'Transplantes: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Transplantes: NO');
            $pdf->Ln();
        }
        if ($alteracionesEnRinones == 1) {
            $pdf->Write(7, 'Alteraciones en riñones: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Alteraciones en riñones: NO');
            $pdf->Ln();
        }
        if ($intolerancia_a_alimentos == 1) {
            $pdf->Write(7, 'Intolerancia a alimientos: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Intolerancia a alimientos: NO');
            $pdf->Ln();
        }
        if ($mialgias == 1) {
            $pdf->Write(7, 'Mialgias: Si');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Mialgias: NO');
            $pdf->Ln();
        }
        if ($limitaionesDeMovimiento == 1) {
            $pdf->Write(7, 'Limitaciones de movimiento: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Limitaciones de movimiento: NO');
            $pdf->Ln();
        }
        if ($trumatismoEnLaCara == 1) {
            $pdf->Write(7, 'Traumatismo en la cara: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Traumatismo en la cara: NO');
            $pdf->Ln();
        }
        if ($amigdalitis == 1) {
            $pdf->Write(7, 'Amigdalitis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Amigdalitis: NO');
            $pdf->Ln();
        }
        if ($cancer == 1) {
            $pdf->Write(7, 'Cancer: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Cancer: No');
            $pdf->Ln();
        }
        if ($leucemia == 1) {
            $pdf->Write(7, 'Leucemia: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Leucemia: NO');
            $pdf->Ln();
        }
        if ($embarazo == 1) {
            $pdf->Write(7, 'Embarazo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Embarazo: NO');
            $pdf->Ln();
        }
        $pdf->Write(7, 'AA: ' . $aa);
        $pdf->Ln();
        $pdf->Write(7, 'AQ: ' . $aq);
        $pdf->Ln();
        $pdf->Write(7, 'Medicamentos: ' . $medicamentos);
        $pdf->Ln();
        $pdf->Write(7, 'Historia Familia AFP: ' . $historialFamiliarAfp);
        $pdf->Ln();
        $pdf->Write(7, 'Historia Familiar AFNP: ' . $historialFamiliarAfnp);
        $pdf->Ln();
        $pdf->Ln();

//************************************************************************************+
        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->SetTextColor('255', '255', '255'); //para imprimir en rojo 
        $pdf->Multicell(190, 7, "Historia Social", 1, 'L', true);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir en rojo 
        $pdf->Ln(); //ahora salta
        $pdf->SetFont('Helvetica', 'B', 14);
//***********************************************************************************+
        $pdf->Write(7, 'Tipo de Dieta: ' . $historialSocialTipoDieta);
        $pdf->Ln();
        if ($historialSocialTabaquismo == 1) {
            $pdf->Write(7, 'Tabaquismo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Tabaquismo: NO');
            $pdf->Ln();
        }
        if ($historialSocialAlcoholismo == 1) {
            $pdf->Write(7, 'Alcholoismo: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Alcholoismo: NO');
            $pdf->Ln();
        }
        if ($historialSocialConsumoDrogas == 1) {
            $pdf->Write(7, 'Consumo de Drogas: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Consumo de Drogas: NO');
            $pdf->Ln();
        }
$pdf->Ln();
//***********************************************************************************+
        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->SetTextColor('255', '255', '255'); //para imprimir
        $pdf->Multicell(190, 7, "Historia Dental", 1, 'L', true);
        $pdf->SetTextColor('0', '0', '0'); //para imprimir
        $pdf->SetFont('Helvetica', 'B', 14);
        $pdf->Ln(); //salto de linea
//************************************************************************************


        $pdf->Write(7, 'Ultima Visita: ' . $historiaDentalUltimaVisita);
        $pdf->Ln();
        $pdf->Write(7, 'Tratamiento Recibido: ' . $historiaDentalTratamientoRecibido);
        $pdf->Ln();
        $pdf->Write(7, 'Ultima Radiografia: ' . $historiaDentalUltimaRadiografia);
        $pdf->Ln();
        $pdf->Write(7, 'Reacciones a la Anestecia: ' . $historiaDentalReaccionesAnestecia);
        $pdf->Ln();
        $pdf->Write(7, 'Experiencias Desagradables: ' . $historiaDentalExperienciasDesagradables);
        $pdf->Ln();
        $pdf->Write(7, 'Frecuencia de Cepillado: ' . $historiaDentalFrecuendiaCepillado);
        $pdf->Ln();
        $pdf->Write(7, 'Tipo de Cepillo: ' . $historiaDentalTipoCepillo);
        $pdf->Ln();
        $pdf->Write(7, 'Tecnica de Cepillado: ' . $historiaDentalTecnicaCepillo);
        $pdf->Ln();
        $pdf->Write(7, 'Tipo de Hilo Dental: ' . $historiaDentalTipoHiloDental);
        $pdf->Ln();
        $pdf->Write(7, 'Enjuague Bucal: ' . $historiaDentalEnguajeBucal);
        $pdf->Ln();

        if ($historiaDentalDificultadParaAbrirBoca == 1) {
            $pdf->Write(7, 'Dificultad para abrir la Boca: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dificultad para abrir la Boca: NO');
            $pdf->Ln();
        }
        if ($historiaDentalRuidoMandubula == 1) {
            $pdf->Write(7, 'Ruido en la Mandibula: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Ruido en la Mandibula: NO');
            $pdf->Ln();
        }
        if ($historiaDentalDislocamientoMandubula == 1) {
            $pdf->Write(7, 'Dislocamiento de Mandibula: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dislocamiento de Mandibula: NO');
            $pdf->Ln();
        }
        if ($historiaDentalDolorOido == 1) {
            $pdf->Write(7, 'Dolor de Oido: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dolor de Oido: NO');
            $pdf->Ln();
        }
        if ($historiaDentalDolorMasticar == 1) {
            $pdf->Write(7, 'Dolor al Masticar: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dolor al Masticar: NO');
            $pdf->Ln();
        }
        if ($historiaDentalCambiosMordida == 1) {
            $pdf->Write(7, 'Cambios en la Mordida: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Cambios en la Mordida: NO');
            $pdf->Ln();
        }
        if ($historiaDentalDoloresDeCabeza == 1) {
            $pdf->Write(7, 'Dolores de Cabeza: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Dolores de Cabeza: NO');
            $pdf->Ln();
        }
        if ($historiaDentalTraumaCabeza == 1) {
            $pdf->Write(7, 'Traumas de Cabeza: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Traumas de Cabeza: NO');
            $pdf->Ln();
        }
        if ($historiaDentalArtritis == 1) {
            $pdf->Write(7, 'Artritis: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Artritis: NO');
            $pdf->Ln();
        }
        if ($historiaDentalProblemaMasticar == 1) {
            $pdf->Write(7, 'Problemas al Masticar: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Problemas al Masticar: NO');
            $pdf->Ln();
        }
        if ($historiaDentalRechinadoDientes == 1) {
            $pdf->Write(7, 'Rechinado de Dientes: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Rechinado de Dientes: NO');
            $pdf->Ln();
        }
        if ($historiaDentalProblemaAtm == 1) {
            $pdf->Write(7, 'Problemas de ATM: SI');
            $pdf->Ln();
        } else {
            $pdf->Write(7, 'Rechinado de DientesProblemas de ATM: NO');
            $pdf->Ln();
        }
//************************************************************************************


        ob_end_clean();
        $output = $pdf->output();
        file_put_contents($id . '.pdf', $output);
    }

}
