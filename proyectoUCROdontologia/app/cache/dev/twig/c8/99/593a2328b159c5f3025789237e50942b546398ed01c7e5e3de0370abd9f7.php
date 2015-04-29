<?php

/* ConnectionBDBundle:Paciente:index.html.twig */
class __TwigTemplate_c899593a2328b159c5f3025789237e50942b546398ed01c7e5e3de0370abd9f7 extends Twig_Template
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
        // line 97
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Lista de pacientes</h2>

            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Ingreso</th>
                            <th>Edad</th>
                            <th>Carne</th>
                            <th>Beca</th>
                            <th>Carrera</th>
                            <th>Telefono</th>
                            <th>Correoelectronico</th>

                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                            <tr>

                                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            if ($this->getAttribute($context["entity"], "fechaDeIngreso", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDeIngreso", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edad", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carne", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beca", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carrera", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoMovil", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correoElectronico", array()), "html", null, true);
            echo "</td>

                                <td>
                                    <ul>

                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>


                                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>

                                    </ul>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </tbody>
                </table>
<center>
                <ul class=\"pagination pagination-centered\">
                    <li><a href=\"#\">Anterior</a></li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">Siguiente</a></li>
                </ul>
    </center>
            </div>
<center>
            <ul>

                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("paciente_new");
        echo "\">
                    <strong>Ingresar un nuevo paciente </strong>
                </a>

            </ul>
</center>
        </div>

    </div><!--/span-->


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
        return array (  159 => 85,  139 => 67,  126 => 60,  120 => 57,  112 => 52,  108 => 51,  102 => 48,  98 => 47,  93 => 45,  87 => 42,  80 => 40,  76 => 39,  70 => 38,  66 => 36,  62 => 35,  36 => 11,  33 => 4,  29 => 97,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
