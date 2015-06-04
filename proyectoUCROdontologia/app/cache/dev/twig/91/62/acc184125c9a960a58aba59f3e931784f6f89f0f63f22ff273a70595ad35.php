<?php

/* ConnectionBDBundle:HistorialMedico:show.html.twig */
class __TwigTemplate_9162acc184125c9a960a58aba59f3e931784f6f89f0f63f22ff273a70595ad35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_header.html.twig")->display($context);
        // line 2
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_menu_horizontal.html.twig")->display($context);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 390
        echo "            ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Historial Médico</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <tbody>
                       
                        <tr>
                            <th>Dolorcabezafrecuente</th>
                            ";
        // line 16
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dolorCabezaFrecuente", array()) == 1)) {
            // line 17
            echo "                            <td> &#x2713 </td>
                            ";
        }
        // line 19
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dolorCabezaFrecuente", array()) != 1)) {
            // line 20
            echo "                            <td> Sin Síntomas </td>
                            ";
        }
        // line 22
        echo "                        </tr>
                        <tr>
                            <th>Historialdental</th>
                            ";
        // line 25
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialDental", array()) == 1)) {
            // line 26
            echo "                            <td> &#x2713 </td>
                            ";
        }
        // line 28
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialDental", array()) != 1)) {
            // line 29
            echo "                            <td> Sin Síntomas </td>
                            ";
        }
        // line 31
        echo "                        </tr>
                        <tr>
                            <th>Vertigo</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vertigo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Desmayo</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "desmayo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Perdidadeconsiencia</th>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "perdidaDeConsiencia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemasvisules</th>
                            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasVisules", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemasauditivos</th>
                            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasAuditivos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sinusitis</th>
                            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sinusitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Obstruccionnasal</th>
                            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obstruccionNasal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemastiroides</th>
                            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasTiroides", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Diabetes</th>
                            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diabetes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cambiosinesperadospeso</th>
                            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cambiosInesperadosPeso", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Disnea</th>
                            <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disnea", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tos</th>
                            <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tuberculosis</th>
                            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tuberculosis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Enfisemapulmonar</th>
                            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfisemaPulmonar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Asma</th>
                            <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "asma", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Infartomiocardio</th>
                            <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "infartoMiocardio", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Insuficienciacadiaca</th>
                            <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "insuficienciaCadiaca", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hipertensionarterial</th>
                            <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hipertensionArterial", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anginadepecho</th>
                            <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anginaDePecho", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Soplocardiaco</th>
                            <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "soploCardiaco", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fiebrereumatica</th>
                            <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiebreReumatica", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Lesionescardiacascongenitas</th>
                            <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lesionesCardiacasCongenitas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Valvulascardicasartificiales</th>
                            <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valvulasCardicasArtificiales", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anemia</th>
                            <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anemia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tranfisiones</th>
                            <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tranfisiones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Trobosis</th>
                            <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trobosis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anomalisasdecelulassangineas</th>
                            <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anomalisasDeCelulasSangineas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hepatitis</th>
                            <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hepatitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ictericia</th>
                            <td>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ictericia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ulceragastrica</th>
                            <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ulceraGastrica", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Enfermedaddetramisionsexual</th>
                            <td>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfermedadDeTramisionSexual", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Vih</th>
                            <td>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vih", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Paralisis</th>
                            <td>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paralisis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Depresion</th>
                            <td>";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depresion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nerviosismo</th>
                            <td>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nerviosismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tension</th>
                            <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tension", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Convulsiones</th>
                            <td>";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "convulsiones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hemorragias</th>
                            <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hemorragias", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Artritis</th>
                            <td>";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "artritis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Reumatismo</th>
                            <td>";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reumatismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Transplantes</th>
                            <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transplantes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Alteracionesenrinones</th>
                            <td>";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alteracionesEnRinones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Intoleranciaaalimentos</th>
                            <td>";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intoleranciaAAlimentos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Mialgias</th>
                            <td>";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mialgias", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Limitaionesdemovimiento</th>
                            <td>";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "limitaionesDeMovimiento", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Trumatismoenlacara</th>
                            <td>";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trumatismoEnLaCara", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Amigdalitis</th>
                            <td>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amigdalitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cancer</th>
                            <td>";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cancer", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Leucemia</th>
                            <td>";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leucemia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Embarazo</th>
                            <td>";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embarazo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Aa</th>
                            <td>";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aa", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Aq</th>
                            <td>";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aq", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Medicamentos</th>
                            <td>";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medicamentos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialfamiliarafp</th>
                            <td>";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfp", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialfamiliarafnp</th>
                            <td>";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfnp", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialtipodieta</th>
                            <td>";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTipoDieta", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialtabaquismo</th>
                            <td>";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTabaquismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialalcoholismo</th>
                            <td>";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialAlcoholismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialconsumodrogas</th>
                            <td>";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialConsumoDrogas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalultimavisita</th>
                            <td>";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaVisita", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltratamientorecibido</th>
                            <td>";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTratamientoRecibido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalultimaradiografia</th>
                            <td>";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaRadiografia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalreaccionesanestecia</th>
                            <td>";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalReaccionesAnestecia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalexperienciasdesagradables</th>
                            <td>";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalExperienciasDesagradables", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalfrecuendiacepillado</th>
                            <td>";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuendiaCepillado", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltipocepillo</th>
                            <td>";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoCepillo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltecnicacepillo</th>
                            <td>";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTecnicaCepillo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalfrecuenciadeusohilodental</th>
                            <td>";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuenciaDeUsoHiloDental", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltipohilodental</th>
                            <td>";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoHiloDental", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalenguajebucal</th>
                            <td>";
        // line 310
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalEnguajeBucal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldificultadparaabrirboca</th>
                            <td>";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDificultadParaAbrirBoca", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalruidomandubula</th>
                            <td>";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRuidoMandubula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldislocamientomandubula</th>
                            <td>";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDislocamientoMandubula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldoloroido</th>
                            <td>";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorOido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldolormasticar</th>
                            <td>";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorMasticar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalcambiosmordida</th>
                            <td>";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalCambiosMordida", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldoloresdecabeza</th>
                            <td>";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDoloresDeCabeza", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltraumacabeza</th>
                            <td>";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTraumaCabeza", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalartritis</th>
                            <td>";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalArtritis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalproblemamasticar</th>
                            <td>";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalProblemaMasticar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalrechinadodientes</th>
                            <td>";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRechinadoDientes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalproblemaatm</th>
                            <td>";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalProblemaAtm", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <center>
                    <table>

                        <ul class=\"record_actions\">
                            <td>
                                <a href=\"";
        // line 368
        echo $this->env->getExtension('routing')->getPath("historialmedico");
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Volver
                                </a>
                            </td>

                            <td>
                                <a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Editar
                                </a>
                            </td>
                            ";
        // line 378
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <td > 
                                ";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                            </td>
                            ";
        // line 382
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                            </td>
                        </ul>
                        </td>
                    </table>
                </center>    
            ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:HistorialMedico:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 382,  687 => 380,  682 => 378,  675 => 374,  666 => 368,  653 => 358,  646 => 354,  639 => 350,  632 => 346,  625 => 342,  618 => 338,  611 => 334,  604 => 330,  597 => 326,  590 => 322,  583 => 318,  576 => 314,  569 => 310,  562 => 306,  555 => 302,  548 => 298,  541 => 294,  534 => 290,  527 => 286,  520 => 282,  513 => 278,  506 => 274,  499 => 270,  492 => 266,  485 => 262,  478 => 258,  471 => 254,  464 => 250,  457 => 246,  450 => 242,  443 => 238,  436 => 234,  429 => 230,  422 => 226,  415 => 222,  408 => 218,  401 => 214,  394 => 210,  387 => 206,  380 => 202,  373 => 198,  366 => 194,  359 => 190,  352 => 186,  345 => 182,  338 => 178,  331 => 174,  324 => 170,  317 => 166,  310 => 162,  303 => 158,  296 => 154,  289 => 150,  282 => 146,  275 => 142,  268 => 138,  261 => 134,  254 => 130,  247 => 126,  240 => 122,  233 => 118,  226 => 114,  219 => 110,  212 => 106,  205 => 102,  198 => 98,  191 => 94,  184 => 90,  177 => 86,  170 => 82,  163 => 78,  156 => 74,  149 => 70,  142 => 66,  135 => 62,  128 => 58,  121 => 54,  114 => 50,  107 => 46,  100 => 42,  93 => 38,  86 => 34,  81 => 31,  77 => 29,  74 => 28,  70 => 26,  68 => 25,  63 => 22,  59 => 20,  56 => 19,  52 => 17,  50 => 16,  37 => 5,  34 => 4,  29 => 390,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
