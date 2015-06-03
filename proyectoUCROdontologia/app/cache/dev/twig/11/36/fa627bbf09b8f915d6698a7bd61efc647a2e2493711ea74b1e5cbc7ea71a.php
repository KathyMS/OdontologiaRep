<?php

/* ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig */
class __TwigTemplate_1136fa627bbf09b8f915d6698a7bd61efc647a2e2493711ea74b1e5cbc7ea71a extends Twig_Template
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
        // line 154
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
        // line 155
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                    <h2>Crear Vigilancia Epidemiologica</h2>
                </div>
                <center>
                    <div class=\"box-content\">
                        <table class=\"table table-bordered table-striped table-condensed\">
                            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                             <tbody>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label');
        echo "</th>
                                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPaciente", array()), 'label');
        echo "</th>
                                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPaciente", array()), 'widget');
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPaciente", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionMotora", array()), 'label');
        echo "</th>
                                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionMotora", array()), 'widget');
        echo "
                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionMotora", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacteriana", array()), 'label');
        echo "</th>
                                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacteriana", array()), 'widget');
        echo "
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacteriana", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacterianaPorcentaje", array()), 'label');
        echo "</th>
                                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacterianaPorcentaje", array()), 'widget');
        echo "
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placaDentobacterianaPorcentaje", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculoDental", array()), 'label');
        echo "</th>
                                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculoDental", array()), 'widget');
        echo "
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculoDental", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActiva", array()), 'label');
        echo "</th>
                                <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActiva", array()), 'widget');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActiva", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActivaNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActivaNumero", array()), 'widget');
        echo "
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cariesActivaNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundas", array()), 'label');
        echo "</th>
                                <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundas", array()), 'widget');
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundas", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundasNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundasNumero", array()), 'widget');
        echo "
                                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fisurasProfundasNumero", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadas", array()), 'label');
        echo "</th>
                                <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadas", array()), 'widget');
        echo "
                                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadas", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadasNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadasNumero", array()), 'widget');
        echo "
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "restauracionesDesajustadasNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoEspontaneo", array()), 'label');
        echo "</th>
                                <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoEspontaneo", array()), 'widget');
        echo "
                                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoEspontaneo", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeo", array()), 'label');
        echo "</th>
                                <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeo", array()), 'widget');
        echo "
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeo", array()), 'errors');
        echo "</td>
                            </tr>
                              <tr>
                                <th style=\"width: 400px;\"> ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeoPorcentaje", array()), 'label');
        echo "</th>
                                <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeoPorcentaje", array()), 'widget');
        echo "
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sangradoAlSondeoPorcentaje", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCaries", array()), 'label');
        echo "</th>
                                <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCaries", array()), 'widget');
        echo "
                                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCaries", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCariesNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCariesNumero", array()), 'widget');
        echo "
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ausenciaPiezasCariesNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoOclusion", array()), 'label');
        echo "</th>
                                <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoOclusion", array()), 'widget');
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoOclusion", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "necesidadesQuirurgicas", array()), 'label');
        echo "</th>
                                <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "necesidadesQuirurgicas", array()), 'widget');
        echo "
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "necesidadesQuirurgicas", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fuma", array()), 'label');
        echo "</th>
                                <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fuma", array()), 'widget');
        echo "
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fuma", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instruccionesFisioterapia", array()), 'label');
        echo "</th>
                                <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instruccionesFisioterapia", array()), 'widget');
        echo "
                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instruccionesFisioterapia", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "odontograma", array()), 'label');
        echo "</th>
                                <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "odontograma", array()), 'widget');
        echo "
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "odontograma", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'label');
        echo "</th>
                                <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'widget');
        echo "
                                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'errors');
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                 <table>
                    <tr>

                        <td> ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                        </td>


                        ";
        // line 142
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        <td>  <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("vigilanciaepidemiologica");
        echo "\" class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>
                        
                    </tr>
                </table>
             ";
        // line 150
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </center>
            </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 150,  398 => 143,  394 => 142,  387 => 138,  375 => 129,  371 => 128,  367 => 127,  361 => 124,  357 => 123,  353 => 122,  347 => 119,  343 => 118,  339 => 117,  333 => 114,  329 => 113,  325 => 112,  319 => 109,  315 => 108,  311 => 107,  305 => 104,  301 => 103,  297 => 102,  291 => 99,  287 => 98,  283 => 97,  277 => 94,  273 => 93,  269 => 92,  263 => 89,  259 => 88,  255 => 87,  249 => 84,  245 => 83,  241 => 82,  235 => 79,  231 => 78,  227 => 77,  221 => 74,  217 => 73,  213 => 72,  207 => 69,  203 => 68,  199 => 67,  193 => 64,  189 => 63,  185 => 62,  179 => 59,  175 => 58,  171 => 57,  165 => 54,  161 => 53,  157 => 52,  151 => 49,  147 => 48,  143 => 47,  137 => 44,  133 => 43,  129 => 42,  123 => 39,  119 => 38,  115 => 37,  109 => 34,  105 => 33,  101 => 32,  95 => 29,  91 => 28,  87 => 27,  81 => 24,  77 => 23,  73 => 22,  67 => 19,  63 => 18,  59 => 17,  53 => 14,  49 => 13,  39 => 5,  36 => 4,  31 => 155,  29 => 154,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
