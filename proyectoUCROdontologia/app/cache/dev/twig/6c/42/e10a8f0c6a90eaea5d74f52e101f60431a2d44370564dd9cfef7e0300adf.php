<?php

/* ConnectionBDBundle:TratamientoGeneral:index.html.twig */
class __TwigTemplate_6c42e10a8f0c6a90eaea5d74f52e101f60431a2d44370564dd9cfef7e0300adf extends Twig_Template
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
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Lista de tratamientos generales</h2>

            </div>
            <div class=\"box-content\">

                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                            <tr>
                                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tratamientogeneral_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreTratamiento", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tratamientogeneral_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-sm\">Ver</a>

                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tratamientogeneral_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-sm\">Editar</a>

                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        // line 50
        echo $this->env->getExtension('routing')->getPath("tratamientogeneral_new");
        echo "\">
                            Crear un nuevo tratamiento general
                        </a>
                    </ul>
                </center>
            ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:TratamientoGeneral:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  88 => 34,  76 => 28,  71 => 26,  65 => 23,  59 => 22,  56 => 21,  52 => 20,  34 => 4,  31 => 3,  26 => 56,  24 => 3,  22 => 2,  20 => 1,);
    }
}
