<?php

/* ConnectionBDBundle:Paciente:edit.html.twig */
class __TwigTemplate_4a96dd54a0bb315e1b49df87c366f1100a6b4c7441dde6c004dfd8d7530fea3d extends Twig_Template
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
        // line 106
        echo "  ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Editar Paciente</h2>
            </div>
               ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            
            <p>
                Nombre:
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget');
        echo "
            </p>
            <p>
                Cedula:
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cedula", array()), 'widget');
        echo "
            </p>
            <p>
                Fecha de Ingreso:
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaDeIngreso", array()), 'widget');
        echo "
            </p>
            <p>
                Sexo:
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'widget');
        echo "
            </p>
            <p>
                Edad:
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edad", array()), 'widget');
        echo "
            </p>
            <p>
                Ocupacion:
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ocupacion", array()), 'widget');
        echo "
            </p>
            <p>
                Carne:
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carne", array()), 'widget');
        echo "
            </p>
            <p>
                Apartado Postal:
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apartadoPostal", array()), 'widget');
        echo "
            </p>
            <p>
                Estado Civil:
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadoCivil", array()), 'widget');
        echo "
            </p>
            <p>
                Beca:
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "beca", array()), 'widget');
        echo "
            </p>
            <p>
                Direccion:
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget');
        echo "
            </p> 
            <p>
                Carrera:
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carrera", array()), 'widget');
        echo "
            </p>
            <p>
                Telefono de Habitacion:
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoHabitacion", array()), 'widget');
        echo "
            </p>
            <p>
                Telefono del Trabajo:
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoTrabajo", array()), 'widget');
        echo "
            </p>
           <p>
                Telefono Movil:
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoMovil", array()), 'widget');
        echo "
            </p>
            <p>
                Correo Electronico:
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correoElectronico", array()), 'widget');
        echo "
            </p>
            <p>
                Sintoma:
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sintoma", array()), 'widget');
        echo "
            </p>
            <p>
                 Encargado:
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idencargado", array()), 'widget');
        echo "
            </p>
            <p>
                Odontologo:
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idodontologo", array()), 'widget');
        echo "
            </p>
            
            
            
            ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <table>
                <ul class=\"record_actions\">
                    <td>
                        <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\">
                            Volver
                        </a>
                    </td>
                    <td>
                        ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                    </td>
                </ul>
            </table>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Paciente:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 101,  192 => 96,  185 => 92,  177 => 87,  170 => 83,  163 => 79,  156 => 75,  149 => 71,  142 => 67,  135 => 63,  128 => 59,  121 => 55,  114 => 51,  107 => 47,  100 => 43,  93 => 39,  86 => 35,  79 => 31,  72 => 27,  65 => 23,  58 => 19,  51 => 15,  44 => 11,  37 => 6,  34 => 4,  29 => 106,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
