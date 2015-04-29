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
        // line 111
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
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Edad</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        
                        <tr>
                            <th>Ocupacion</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ocupacion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Carne</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carne", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apartado postal</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apartadoPostal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Beca</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Carrera</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carrera", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Estado civil</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Direccion</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono de habitacion</th>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoHabitacion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono de trabajo</th>
                            <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoTrabajo", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono movil</th>
                            <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoMovil", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Correo electronico</th>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoElectronico", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sintoma</th>
                            <td>";
        // line 80
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
        // line 90
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\"class=\"btn btn-primary btn-sm\">
                                                Volver
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary btn-sm\">
                                                 Editar
                                            </a>
                                        </td>

                                        ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                        <td>      
                                            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                                        </td>
                                        ";
        // line 104
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
        return array (  198 => 104,  193 => 102,  188 => 100,  180 => 95,  172 => 90,  159 => 80,  152 => 76,  145 => 72,  138 => 68,  131 => 64,  124 => 60,  117 => 56,  110 => 52,  103 => 48,  96 => 44,  89 => 40,  82 => 36,  74 => 31,  67 => 27,  60 => 23,  53 => 19,  46 => 15,  34 => 5,  31 => 3,  26 => 111,  24 => 3,  22 => 2,  20 => 1,);
    }
}
