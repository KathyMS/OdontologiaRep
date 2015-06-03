<?php

/* ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig */
class __TwigTemplate_277201d903867613590a5d46a2f5714b6d25b38f86e56558520b17c110bbfa05 extends Twig_Template
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
        // line 170
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Editar Vigilancia Epidemiologica</h2>
            </div>
            <center>
                <div class=\"box-content\">
                    <table class=\"table table-bordered table-striped table-condensed\">
                        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                        <tbody>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'label');
        echo "</th>
                                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'widget');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoPaciente", array()), 'label');
        echo "</th>
                                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoPaciente", array()), 'widget');
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoPaciente", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "condicionMotora", array()), 'label');
        echo "</th>
                                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "condicionMotora", array()), 'widget');
        echo "
                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "condicionMotora", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacteriana", array()), 'label');
        echo "</th>
                                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacteriana", array()), 'widget');
        echo "
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacteriana", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacterianaPorcentaje", array()), 'label');
        echo "</th>
                                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacterianaPorcentaje", array()), 'widget');
        echo "
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "placaDentobacterianaPorcentaje", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "calculoDental", array()), 'label');
        echo "</th>
                                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "calculoDental", array()), 'widget');
        echo "
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "calculoDental", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActiva", array()), 'label');
        echo "</th>
                                <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActiva", array()), 'widget');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActiva", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActivaNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActivaNumero", array()), 'widget');
        echo "
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cariesActivaNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundas", array()), 'label');
        echo "</th>
                                <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundas", array()), 'widget');
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundas", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundasNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundasNumero", array()), 'widget');
        echo "
                                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fisurasProfundasNumero", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadas", array()), 'label');
        echo "</th>
                                <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadas", array()), 'widget');
        echo "
                                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadas", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadasNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadasNumero", array()), 'widget');
        echo "
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "restauracionesDesajustadasNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoEspontaneo", array()), 'label');
        echo "</th>
                                <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoEspontaneo", array()), 'widget');
        echo "
                                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoEspontaneo", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeo", array()), 'label');
        echo "</th>
                                <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeo", array()), 'widget');
        echo "
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeo", array()), 'errors');
        echo "</td>
                            </tr>
                              <tr>
                                <th style=\"width: 400px;\"> ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeoPorcentaje", array()), 'label');
        echo "</th>
                                <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeoPorcentaje", array()), 'widget');
        echo "
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sangradoAlSondeoPorcentaje", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCaries", array()), 'label');
        echo "</th>
                                <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCaries", array()), 'widget');
        echo "
                                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCaries", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCariesNumero", array()), 'label');
        echo "</th>
                                <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCariesNumero", array()), 'widget');
        echo "
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ausenciaPiezasCariesNumero", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoOclusion", array()), 'label');
        echo "</th>
                                <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoOclusion", array()), 'widget');
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoOclusion", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "necesidadesQuirurgicas", array()), 'label');
        echo "</th>
                                <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "necesidadesQuirurgicas", array()), 'widget');
        echo "
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "necesidadesQuirurgicas", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fuma", array()), 'label');
        echo "</th>
                                <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fuma", array()), 'widget');
        echo "
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fuma", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instruccionesFisioterapia", array()), 'label');
        echo "</th>
                                <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instruccionesFisioterapia", array()), 'widget');
        echo "
                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "instruccionesFisioterapia", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "odontograma", array()), 'label');
        echo "</th>
                                <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "odontograma", array()), 'widget');
        echo "
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "odontograma", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 400px;\"> ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idexpediente", array()), 'label');
        echo "</th>
                                <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idexpediente", array()), 'widget');
        echo "
                                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idexpediente", array()), 'errors');
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                 <table>
                    <tr>

                        <td> ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
                        </td>


                        ";
        // line 142
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <td>  <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("vigilanciaepidemiologica");
        echo "\" class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>
                        ";
        // line 147
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <td > 
                            ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                        </td>
                        ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                    </tr>
                </table>
            </center>
        </div>
    <h1>VigilanciaEpidemiologica edit</h1>

    ";
        // line 159
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("vigilanciaepidemiologica");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 167
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 167,  430 => 163,  423 => 159,  412 => 151,  407 => 149,  402 => 147,  395 => 143,  391 => 142,  384 => 138,  372 => 129,  368 => 128,  364 => 127,  358 => 124,  354 => 123,  350 => 122,  344 => 119,  340 => 118,  336 => 117,  330 => 114,  326 => 113,  322 => 112,  316 => 109,  312 => 108,  308 => 107,  302 => 104,  298 => 103,  294 => 102,  288 => 99,  284 => 98,  280 => 97,  274 => 94,  270 => 93,  266 => 92,  260 => 89,  256 => 88,  252 => 87,  246 => 84,  242 => 83,  238 => 82,  232 => 79,  228 => 78,  224 => 77,  218 => 74,  214 => 73,  210 => 72,  204 => 69,  200 => 68,  196 => 67,  190 => 64,  186 => 63,  182 => 62,  176 => 59,  172 => 58,  168 => 57,  162 => 54,  158 => 53,  154 => 52,  148 => 49,  144 => 48,  140 => 47,  134 => 44,  130 => 43,  126 => 42,  120 => 39,  116 => 38,  112 => 37,  106 => 34,  102 => 33,  98 => 32,  92 => 29,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  70 => 22,  64 => 19,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  36 => 5,  33 => 4,  29 => 170,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
