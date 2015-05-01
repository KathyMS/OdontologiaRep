<?php

/* ConnectionBDBundle:HistorialMedico:show.html.twig */
class __TwigTemplate_25802eca63ae59deaf4ce92db31fe291a589ebb75f1c8fe918826a1398ac40e7 extends Twig_Template
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
        // line 383
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
                            <th>Id</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Dolorcabezafrecuente</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dolorCabezaFrecuente", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialdental</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialDental", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Vertigo</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vertigo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Desmayo</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "desmayo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Perdidadeconsiencia</th>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "perdidaDeConsiencia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemasvisules</th>
                            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasVisules", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemasauditivos</th>
                            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasAuditivos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sinusitis</th>
                            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sinusitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Obstruccionnasal</th>
                            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obstruccionNasal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Problemastiroides</th>
                            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasTiroides", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Diabetes</th>
                            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diabetes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cambiosinesperadospeso</th>
                            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cambiosInesperadosPeso", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Disnea</th>
                            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disnea", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tos</th>
                            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tuberculosis</th>
                            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tuberculosis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Enfisemapulmonar</th>
                            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfisemaPulmonar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Asma</th>
                            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "asma", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Infartomiocardio</th>
                            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "infartoMiocardio", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Insuficienciacadiaca</th>
                            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "insuficienciaCadiaca", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hipertensionarterial</th>
                            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hipertensionArterial", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anginadepecho</th>
                            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anginaDePecho", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Soplocardiaco</th>
                            <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "soploCardiaco", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fiebrereumatica</th>
                            <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiebreReumatica", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Lesionescardiacascongenitas</th>
                            <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lesionesCardiacasCongenitas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Valvulascardicasartificiales</th>
                            <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valvulasCardicasArtificiales", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anemia</th>
                            <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anemia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tranfisiones</th>
                            <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tranfisiones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Trobosis</th>
                            <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trobosis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Anomalisasdecelulassangineas</th>
                            <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anomalisasDeCelulasSangineas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hepatitis</th>
                            <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hepatitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ictericia</th>
                            <td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ictericia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ulceragastrica</th>
                            <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ulceraGastrica", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Enfermedaddetramisionsexual</th>
                            <td>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfermedadDeTramisionSexual", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Vih</th>
                            <td>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vih", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Paralisis</th>
                            <td>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paralisis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Depresion</th>
                            <td>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depresion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nerviosismo</th>
                            <td>";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nerviosismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tension</th>
                            <td>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tension", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Convulsiones</th>
                            <td>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "convulsiones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Hemorragias</th>
                            <td>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hemorragias", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Artritis</th>
                            <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "artritis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Reumatismo</th>
                            <td>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reumatismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Transplantes</th>
                            <td>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transplantes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Alteracionesenrinones</th>
                            <td>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alteracionesEnRinones", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Intoleranciaaalimentos</th>
                            <td>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intoleranciaAAlimentos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Mialgias</th>
                            <td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mialgias", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Limitaionesdemovimiento</th>
                            <td>";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "limitaionesDeMovimiento", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Trumatismoenlacara</th>
                            <td>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trumatismoEnLaCara", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Amigdalitis</th>
                            <td>";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amigdalitis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cancer</th>
                            <td>";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cancer", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Leucemia</th>
                            <td>";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leucemia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Embarazo</th>
                            <td>";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embarazo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Aa</th>
                            <td>";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aa", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Aq</th>
                            <td>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aq", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Medicamentos</th>
                            <td>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medicamentos", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialfamiliarafp</th>
                            <td>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfp", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialfamiliarafnp</th>
                            <td>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfnp", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialtipodieta</th>
                            <td>";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTipoDieta", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialtabaquismo</th>
                            <td>";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTabaquismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialalcoholismo</th>
                            <td>";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialAlcoholismo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historialsocialconsumodrogas</th>
                            <td>";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialConsumoDrogas", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalultimavisita</th>
                            <td>";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaVisita", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltratamientorecibido</th>
                            <td>";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTratamientoRecibido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalultimaradiografia</th>
                            <td>";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaRadiografia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalreaccionesanestecia</th>
                            <td>";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalReaccionesAnestecia", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalexperienciasdesagradables</th>
                            <td>";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalExperienciasDesagradables", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalfrecuendiacepillado</th>
                            <td>";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuendiaCepillado", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltipocepillo</th>
                            <td>";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoCepillo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltecnicacepillo</th>
                            <td>";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTecnicaCepillo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalfrecuenciadeusohilodental</th>
                            <td>";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuenciaDeUsoHiloDental", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltipohilodental</th>
                            <td>";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoHiloDental", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalenguajebucal</th>
                            <td>";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalEnguajeBucal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldificultadparaabrirboca</th>
                            <td>";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDificultadParaAbrirBoca", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalruidomandubula</th>
                            <td>";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRuidoMandubula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldislocamientomandubula</th>
                            <td>";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDislocamientoMandubula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldoloroido</th>
                            <td>";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorOido", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldolormasticar</th>
                            <td>";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorMasticar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalcambiosmordida</th>
                            <td>";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalCambiosMordida", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaldoloresdecabeza</th>
                            <td>";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDoloresDeCabeza", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentaltraumacabeza</th>
                            <td>";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTraumaCabeza", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalartritis</th>
                            <td>";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalArtritis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalproblemamasticar</th>
                            <td>";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalProblemaMasticar", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalrechinadodientes</th>
                            <td>";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRechinadoDientes", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Historiadentalproblemaatm</th>
                            <td>";
        // line 351
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
        // line 361
        echo $this->env->getExtension('routing')->getPath("historialmedico");
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Volver
                                </a>
                            </td>

                            <td>
                                <a href=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Editar
                                </a>
                            </td>
                            ";
        // line 371
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <td > 
                                ";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                            </td>
                            ";
        // line 375
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
        return array (  676 => 375,  671 => 373,  666 => 371,  659 => 367,  650 => 361,  637 => 351,  630 => 347,  623 => 343,  616 => 339,  609 => 335,  602 => 331,  595 => 327,  588 => 323,  581 => 319,  574 => 315,  567 => 311,  560 => 307,  553 => 303,  546 => 299,  539 => 295,  532 => 291,  525 => 287,  518 => 283,  511 => 279,  504 => 275,  497 => 271,  490 => 267,  483 => 263,  476 => 259,  469 => 255,  462 => 251,  455 => 247,  448 => 243,  441 => 239,  434 => 235,  427 => 231,  420 => 227,  413 => 223,  406 => 219,  399 => 215,  392 => 211,  385 => 207,  378 => 203,  371 => 199,  364 => 195,  357 => 191,  350 => 187,  343 => 183,  336 => 179,  329 => 175,  322 => 171,  315 => 167,  308 => 163,  301 => 159,  294 => 155,  287 => 151,  280 => 147,  273 => 143,  266 => 139,  259 => 135,  252 => 131,  245 => 127,  238 => 123,  231 => 119,  224 => 115,  217 => 111,  210 => 107,  203 => 103,  196 => 99,  189 => 95,  182 => 91,  175 => 87,  168 => 83,  161 => 79,  154 => 75,  147 => 71,  140 => 67,  133 => 63,  126 => 59,  119 => 55,  112 => 51,  105 => 47,  98 => 43,  91 => 39,  84 => 35,  77 => 31,  70 => 27,  63 => 23,  56 => 19,  49 => 15,  37 => 5,  34 => 4,  29 => 383,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
