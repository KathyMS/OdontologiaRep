<?php

/* ConnectionBDBundle:Paciente:show.html.twig */
class __TwigTemplate_a334c05d0c5430cd64677b9ed2a04cec110456812917533b4dd6d0a9d5066837 extends Twig_Template
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
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "        ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Paciente</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <tbody>
                        <tr>
                            <th style=\"width: 400px;\">Nombre</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cedula</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fecha de ingreso</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaDeIngreso", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sexo</th>
                            ";
        // line 27
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexo", array()) == 1)) {
            // line 28
            echo "                            <td> Masculino </td>
                            ";
        }
        // line 30
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexo", array()) == 2)) {
            // line 31
            echo "                            <td> Femenino </td>
                            ";
        }
        // line 32
        echo "                            
                        </tr>
                        <tr>
                            <th>Edad</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        
                        <tr>
                            <th>Ocupacion</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ocupacion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Carne</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carne", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apartado postal</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apartadoPostal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Beca</th>
                            ";
        // line 53
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()) == 1)) {
            // line 54
            echo "                            <td> Beca 1 </td>
                            ";
        }
        // line 56
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()) == 2)) {
            // line 57
            echo "                            <td> Beca 2 </td>
                            ";
        }
        // line 59
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()) == 3)) {
            // line 60
            echo "                            <td> Beca 3 </td>
                            ";
        }
        // line 62
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()) == 4)) {
            // line 63
            echo "                            <td> Beca 4 </td>
                            ";
        }
        // line 65
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()) == 5)) {
            // line 66
            echo "                            <td> Beca 5 </td>
                            ";
        }
        // line 68
        echo "                        </tr>
                        <tr>
                            <th>Carrera</th>
                            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carrera", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                             <th>Estado civil</th>
                            ";
        // line 75
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()) == 1)) {
            // line 76
            echo "                            <td> Soltero </td>
                            ";
        }
        // line 78
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()) == 2)) {
            // line 79
            echo "                            <td> Casado </td>
                            ";
        }
        // line 81
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()) == 3)) {
            // line 82
            echo "                            <td> Divorciado </td>
                            ";
        }
        // line 84
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()) == 4)) {
            // line 85
            echo "                            <td> Viudo </td>
                            ";
        }
        // line 87
        echo "                        </tr>
                        <tr>
                            <th>Direccion</th>
                            <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono de habitacion</th>
                            <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoHabitacion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono de trabajo</th>
                            <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoTrabajo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono movil</th>
                            <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoMovil", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Correo electronico</th>
                            <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoElectronico", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sintoma</th>
                            <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sintoma", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                            <center>
                                <table>

                                    <ul class=\"record_actions\">
                                        <td>
                                            <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\"class=\"btn btn-primary btn-sm\">
                                                Volver
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary btn-sm\">
                                                 Editar
                                            </a>
                                        </td>

                                        ";
        // line 130
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                        <td>      
                                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                                        </td>
                                        ";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                       
                                    </ul>
                                    </td>
                                </table>
                            </center>
        ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Paciente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 134,  262 => 132,  257 => 130,  249 => 125,  241 => 120,  228 => 110,  221 => 106,  214 => 102,  207 => 98,  200 => 94,  193 => 90,  188 => 87,  184 => 85,  181 => 84,  177 => 82,  174 => 81,  170 => 79,  167 => 78,  163 => 76,  161 => 75,  154 => 71,  149 => 68,  145 => 66,  142 => 65,  138 => 63,  135 => 62,  131 => 60,  128 => 59,  124 => 57,  121 => 56,  117 => 54,  115 => 53,  108 => 49,  101 => 45,  94 => 41,  86 => 36,  80 => 32,  76 => 31,  73 => 30,  69 => 28,  67 => 27,  60 => 23,  53 => 19,  46 => 15,  34 => 5,  31 => 3,  26 => 141,  24 => 3,  22 => 2,  20 => 1,);
    }
}
