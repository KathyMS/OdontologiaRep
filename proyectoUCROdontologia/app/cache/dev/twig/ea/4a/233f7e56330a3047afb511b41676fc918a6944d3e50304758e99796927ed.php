<?php

/* ConnectionBDBundle:Odontologo:index.html.twig */
class __TwigTemplate_ea4a233f7e56330a3047afb511b41676fc918a6944d3e50304758e99796927ed extends Twig_Template
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
        // line 65
        echo "            ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Lista de odontólogos</h2>

            </div>
            <div class=\"box-content\">

                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correoelectronico</th>
                            <th>Practicante</th>
                            <th>Cedula</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                            <tr>
                                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("odontologo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefono", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "practicante", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("odontologo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>

                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("odontologo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>

                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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


                    <ul>

                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("odontologo_new");
        echo "\">
                            Crear un nuevo odontólogo
                        </a>

                    </ul>
                </center>
            ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Odontologo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 58,  106 => 41,  94 => 35,  89 => 33,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  65 => 26,  62 => 25,  58 => 24,  37 => 5,  34 => 4,  29 => 65,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
