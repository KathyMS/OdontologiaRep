<?php

/* ConnectionBDBundle:Paciente:index.html.twig */
class __TwigTemplate_ad3cc956d6e1530511db9aa31fec5bd3c7070d325e115b5b56d2158288740b01 extends Twig_Template
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
        // line 96
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
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                            <tr>

                                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edad", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carne", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beca", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carrera", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoMovil", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correoElectronico", array()), "html", null, true);
            echo "</td>

                                <td>
                                    <ul>

                                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>


                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>
                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paciente_pdf", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\" style=\"width:40px; height:30px\">PDF</a>

                                    </ul>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        // line 84
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
        return array (  156 => 84,  136 => 66,  123 => 59,  119 => 58,  113 => 55,  105 => 50,  101 => 49,  95 => 46,  91 => 45,  86 => 43,  80 => 40,  75 => 38,  69 => 37,  65 => 35,  61 => 34,  36 => 11,  33 => 4,  29 => 96,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
