<?php

/* ConnectionBDBundle:HistorialMedico:show.html.twig */
class __TwigTemplate_363d724710dcecf0845f17b892ae8560d63e97ed55743d85404b89a2a42d8028 extends Twig_Template
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
        // line 366
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>HistorialMedico</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dolorcabezafrecuente</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dolorCabezaFrecuente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialdental</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialDental", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vertigo</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vertigo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Desmayo</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "desmayo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Perdidadeconsiencia</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "perdidaDeConsiencia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Problemasvisules</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasVisules", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Problemasauditivos</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasAuditivos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sinusitis</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sinusitis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obstruccionnasal</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obstruccionNasal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Problemastiroides</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "problemasTiroides", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Diabetes</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diabetes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cambiosinesperadospeso</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cambiosInesperadosPeso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disnea</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disnea", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tos</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tuberculosis</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tuberculosis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enfisemapulmonar</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfisemaPulmonar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Asma</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "asma", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Infartomiocardio</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "infartoMiocardio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Insuficienciacadiaca</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "insuficienciaCadiaca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hipertensionarterial</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hipertensionArterial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anginadepecho</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anginaDePecho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Soplocardiaco</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "soploCardiaco", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fiebrereumatica</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiebreReumatica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lesionescardiacascongenitas</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lesionesCardiacasCongenitas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valvulascardicasartificiales</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valvulasCardicasArtificiales", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anemia</th>
                <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anemia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tranfisiones</th>
                <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tranfisiones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trobosis</th>
                <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trobosis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anomalisasdecelulassangineas</th>
                <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anomalisasDeCelulasSangineas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hepatitis</th>
                <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hepatitis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ictericia</th>
                <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ictericia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ulceragastrica</th>
                <td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ulceraGastrica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enfermedaddetramisionsexual</th>
                <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enfermedadDeTramisionSexual", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vih</th>
                <td>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vih", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paralisis</th>
                <td>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paralisis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Depresion</th>
                <td>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depresion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nerviosismo</th>
                <td>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nerviosismo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tension</th>
                <td>";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tension", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Convulsiones</th>
                <td>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "convulsiones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hemorragias</th>
                <td>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hemorragias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Artritis</th>
                <td>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "artritis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reumatismo</th>
                <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reumatismo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Transplantes</th>
                <td>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transplantes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alteracionesenrinones</th>
                <td>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alteracionesEnRinones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intoleranciaaalimentos</th>
                <td>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intoleranciaAAlimentos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mialgias</th>
                <td>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mialgias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Limitaionesdemovimiento</th>
                <td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "limitaionesDeMovimiento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trumatismoenlacara</th>
                <td>";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trumatismoEnLaCara", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amigdalitis</th>
                <td>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amigdalitis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cancer</th>
                <td>";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cancer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Leucemia</th>
                <td>";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leucemia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Embarazo</th>
                <td>";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embarazo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aa</th>
                <td>";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aq</th>
                <td>";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aq", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Medicamentos</th>
                <td>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medicamentos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialfamiliarafp</th>
                <td>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialfamiliarafnp</th>
                <td>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialFamiliarAfnp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialsocialtipodieta</th>
                <td>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTipoDieta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialsocialtabaquismo</th>
                <td>";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialTabaquismo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialsocialalcoholismo</th>
                <td>";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialAlcoholismo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historialsocialconsumodrogas</th>
                <td>";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historialSocialConsumoDrogas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalultimavisita</th>
                <td>";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaVisita", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaltratamientorecibido</th>
                <td>";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTratamientoRecibido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalultimaradiografia</th>
                <td>";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalUltimaRadiografia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalreaccionesanestecia</th>
                <td>";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalReaccionesAnestecia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalexperienciasdesagradables</th>
                <td>";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalExperienciasDesagradables", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalfrecuendiacepillado</th>
                <td>";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuendiaCepillado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaltipocepillo</th>
                <td>";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoCepillo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaltecnicacepillo</th>
                <td>";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTecnicaCepillo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalfrecuenciadeusohilodental</th>
                <td>";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalFrecuenciaDeUsoHiloDental", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaltipohilodental</th>
                <td>";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTipoHiloDental", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalenguajebucal</th>
                <td>";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalEnguajeBucal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaldificultadparaabrirboca</th>
                <td>";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDificultadParaAbrirBoca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalruidomandubula</th>
                <td>";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRuidoMandubula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaldislocamientomandubula</th>
                <td>";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDislocamientoMandubula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaldoloroido</th>
                <td>";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorOido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaldolormasticar</th>
                <td>";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDolorMasticar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalcambiosmordida</th>
                <td>";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalCambiosMordida", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaldoloresdecabeza</th>
                <td>";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalDoloresDeCabeza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentaltraumacabeza</th>
                <td>";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalTraumaCabeza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalartritis</th>
                <td>";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalArtritis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalproblemamasticar</th>
                <td>";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalProblemaMasticar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalrechinadodientes</th>
                <td>";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalRechinadoDientes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Historiadentalproblemaatm</th>
                <td>";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "historiaDentalProblemaAtm", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 354
        echo $this->env->getExtension('routing')->getPath("historialmedico");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 363
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
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
        return array (  657 => 363,  650 => 359,  642 => 354,  632 => 347,  625 => 343,  618 => 339,  611 => 335,  604 => 331,  597 => 327,  590 => 323,  583 => 319,  576 => 315,  569 => 311,  562 => 307,  555 => 303,  548 => 299,  541 => 295,  534 => 291,  527 => 287,  520 => 283,  513 => 279,  506 => 275,  499 => 271,  492 => 267,  485 => 263,  478 => 259,  471 => 255,  464 => 251,  457 => 247,  450 => 243,  443 => 239,  436 => 235,  429 => 231,  422 => 227,  415 => 223,  408 => 219,  401 => 215,  394 => 211,  387 => 207,  380 => 203,  373 => 199,  366 => 195,  359 => 191,  352 => 187,  345 => 183,  338 => 179,  331 => 175,  324 => 171,  317 => 167,  310 => 163,  303 => 159,  296 => 155,  289 => 151,  282 => 147,  275 => 143,  268 => 139,  261 => 135,  254 => 131,  247 => 127,  240 => 123,  233 => 119,  226 => 115,  219 => 111,  212 => 107,  205 => 103,  198 => 99,  191 => 95,  184 => 91,  177 => 87,  170 => 83,  163 => 79,  156 => 75,  149 => 71,  142 => 67,  135 => 63,  128 => 59,  121 => 55,  114 => 51,  107 => 47,  100 => 43,  93 => 39,  86 => 35,  79 => 31,  72 => 27,  65 => 23,  58 => 19,  51 => 15,  44 => 11,  36 => 5,  33 => 4,  29 => 366,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
