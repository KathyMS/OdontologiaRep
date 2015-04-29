<?php

/* ConnectionBDBundle:Paciente:new.html.twig */
class __TwigTemplate_4097ec4cb330235d6adee19f2a81becb9e2c7ce2f9c837abdd1a23993dc666c1 extends Twig_Template
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
        // line 141
        echo "    ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Crear Paciente</h2>
            </div>
            <center>
                <div class=\"box-content\">
                    <table class=\"table table-bordered table-striped table-condensed\">
                        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <tbody>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</th>
                                <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'label');
        echo "</th>
                                <td> ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget');
        echo "
                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'errors');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDeIngreso", array()), 'label');
        echo "</th>
                                <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDeIngreso", array()), 'errors');
        echo "
                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDeIngreso", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'label');
        echo " </th>
                                <td> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'errors');
        echo "
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'label');
        echo "</th>
                                <td> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'errors');
        echo "
                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacion", array()), 'label');
        echo "</th>
                                <td> ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacion", array()), 'errors');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacion", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\">  ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carne", array()), 'label');
        echo " </th>
                                <td> ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carne", array()), 'errors');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carne", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\">  ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apartadoPostal", array()), 'label');
        echo "</th>
                                <td> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apartadoPostal", array()), 'errors');
        echo "
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apartadoPostal", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoCivil", array()), 'label');
        echo " </th>
                                <td>  ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoCivil", array()), 'errors');
        echo "
                                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoCivil", array()), 'widget');
        echo "</td>
                            </tr>

                            <tr>
                                <th style=\"width: 400px;\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beca", array()), 'label');
        echo " </th>
                                <td> ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beca", array()), 'errors');
        echo "
                                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beca", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo " </th>
                                <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), 'label');
        echo " </th>
                                <td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), 'errors');
        echo "
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrera", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoHabitacion", array()), 'label');
        echo " </th>
                                <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoHabitacion", array()), 'errors');
        echo "
                                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoHabitacion", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\">  ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoTrabajo", array()), 'label');
        echo "</th>
                                <td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoTrabajo", array()), 'errors');
        echo "
                                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoTrabajo", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'label');
        echo "</th>
                                <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'errors');
        echo "
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoMovil", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'label');
        echo " </th>
                                <td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'errors');
        echo "
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sintoma", array()), 'label');
        echo "</th>
                                <td> ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sintoma", array()), 'errors');
        echo "
                                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sintoma", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> Encargado </th>
                                <td> ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idencargado", array()), 'errors');
        echo "
                                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idencargado", array()), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> Odontologo</th>
                                <td>  ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idodontologo", array()), 'errors');
        echo "
                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idodontologo", array()), 'widget');
        echo "</td>
                            </tr>

                    </table>
                </div>

                                    <table>
                                        <tr>

                                            <td> ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                                            </td>
                                            <td>  <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                    Volver
                                                </a>
                                            </td>
                                          
                                        </tr>
                                    </table>

";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
              </center>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Paciente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 137,  336 => 129,  331 => 127,  319 => 118,  315 => 117,  308 => 113,  304 => 112,  297 => 108,  293 => 107,  289 => 106,  283 => 103,  279 => 102,  275 => 101,  269 => 98,  265 => 97,  261 => 96,  255 => 93,  251 => 92,  247 => 91,  241 => 88,  237 => 87,  233 => 86,  227 => 83,  223 => 82,  219 => 81,  213 => 78,  209 => 77,  205 => 76,  199 => 73,  195 => 72,  191 => 71,  184 => 67,  180 => 66,  176 => 65,  169 => 61,  165 => 60,  161 => 59,  154 => 55,  150 => 54,  146 => 53,  139 => 49,  135 => 48,  131 => 47,  124 => 43,  120 => 42,  116 => 41,  109 => 37,  105 => 36,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  79 => 25,  75 => 24,  71 => 23,  65 => 20,  61 => 19,  57 => 18,  51 => 15,  47 => 14,  37 => 6,  34 => 4,  29 => 141,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
