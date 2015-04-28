<?php

/* ConnectionBDBundle:Paciente:index.html.twig */
class __TwigTemplate_cbe93562e91e6269c00e625024fc2e696e5f95fa49d093942702f6f965e3e2f7 extends Twig_Template
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
        // line 75
        echo "  ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Paciente list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cedula</th>
                <th>Fechadeingreso</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Nombre</th>
                <th>Ocupacion</th>
                <th>Carne</th>
                <th>Apartadopostal</th>
                <th>Beca</th>
                <th>Carrera</th>
                <th>Estadocivil</th>
                <th>Direccion</th>
                <th>Telefonohabitacion</th>
                <th>Telefonotrabajo</th>
                <th>Telefonomovil</th>
                <th>Correoelectronico</th>
                <th>Sintoma</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["entity"], "fechaDeIngreso", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDeIngreso", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sexo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ocupacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apartadoPostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beca", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carrera", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoCivil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoHabitacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoTrabajo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoMovil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sintoma", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("paciente_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Paciente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 69,  170 => 64,  158 => 58,  152 => 55,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  83 => 36,  79 => 35,  73 => 34,  70 => 33,  66 => 32,  37 => 5,  34 => 4,  29 => 75,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
