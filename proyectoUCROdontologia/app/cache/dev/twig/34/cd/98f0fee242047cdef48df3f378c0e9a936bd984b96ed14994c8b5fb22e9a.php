<?php

/* ConnectionBDBundle:VigilanciaEpidemiologica:show.html.twig */
class __TwigTemplate_34cd98f0fee242047cdef48df3f378c0e9a936bd984b96ed14994c8b5fb22e9a extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_menu_vertical.html.twig")->display($context);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 134
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Vigilancia Epidemiologica</h2>
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
                <th>Fecha</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipopaciente</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoPaciente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Condicionmotora</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "condicionMotora", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Placadentobacteriana</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "placaDentobacteriana", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Placadentobacterianaporcentaje</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "placaDentobacterianaPorcentaje", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calculodental</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calculoDental", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cariesactiva</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cariesActiva", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cariesactivanumero</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cariesActivaNumero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fisurasprofundas</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fisurasProfundas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fisurasprofundasnumero</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fisurasProfundasNumero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Restauracionesdesajustadas</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restauracionesDesajustadas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Restauracionesdesajustadasnumero</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restauracionesDesajustadasNumero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sangradoespontaneo</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sangradoEspontaneo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sangradoalsondeo</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sangradoAlSondeo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sangradoalsondeoporcentaje</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sangradoAlSondeoPorcentaje", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ausenciapiezascaries</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ausenciaPiezasCaries", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ausenciapiezascariesnumero</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ausenciaPiezasCariesNumero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipooclusion</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoOclusion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Necesidadesquirurgicas</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "necesidadesQuirurgicas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fuma</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuma", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instruccionesfisioterapia</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "instruccionesFisioterapia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Odontograma</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "odontograma", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
             <center>
                    <table>

                        <ul class=\"record_actions\">
                            <td>
                                <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("vigilanciaepidemiologica");
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Volver
                                </a>
                            </td>

                            <td>
                                <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vigilanciaepidemiologica_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Editar
                                </a>
                            </td>
                            </td>
                            ";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <td > 
                                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                            </td>
                            ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </ul>
                        </td>
                    </table>
                </center>  
            </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:VigilanciaEpidemiologica:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 127,  236 => 125,  231 => 123,  223 => 118,  214 => 112,  202 => 103,  195 => 99,  188 => 95,  181 => 91,  174 => 87,  167 => 83,  160 => 79,  153 => 75,  146 => 71,  139 => 67,  132 => 63,  125 => 59,  118 => 55,  111 => 51,  104 => 47,  97 => 43,  90 => 39,  83 => 35,  76 => 31,  69 => 27,  62 => 23,  55 => 19,  48 => 15,  36 => 5,  33 => 4,  29 => 134,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
