<?php

/* ConnectionBDBundle:Paciente:show.html.twig */
class __TwigTemplate_d9c380e0f569cf694fe974b78b2ed40c19d1c4f64e2d13929cb38adbf06e6507 extends Twig_Template
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
        // line 97
        echo "  ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Paciente</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cedula</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechadeingreso</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaDeIngreso", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ocupacion</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ocupacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carne</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apartadopostal</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apartadoPostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Beca</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carrera</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "carrera", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadocivil</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estadoCivil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonohabitacion</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoHabitacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonotrabajo</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoTrabajo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonomovil</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoMovil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correoelectronico</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoElectronico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sintoma</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sintoma", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
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
        return array (  186 => 94,  179 => 90,  171 => 85,  161 => 78,  154 => 74,  147 => 70,  140 => 66,  133 => 62,  126 => 58,  119 => 54,  112 => 50,  105 => 46,  98 => 42,  91 => 38,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  56 => 18,  49 => 14,  42 => 10,  34 => 4,  31 => 3,  26 => 97,  24 => 3,  22 => 2,  20 => 1,);
    }
}
