<?php

/* ConnectionBDBundle:HistorialMedico:index.html.twig */
class __TwigTemplate_0ae851dce28f6bf1512d8394d359536170726494b698f7ec838c416d7997f551 extends Twig_Template
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
        // line 66
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
                <h2>Historial Médico</h2>
 
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>            
                            <th>Tabaquismo</th>
                            <th>Alcoholismo</th>
                            <th>Dolor al masticar</th>
                            <th>Rechinado de dientes</th>
 
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "                            <tr>
                                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialTabaquismo", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialTabaquismo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialAlcoholismo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDolorMasticar", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalRechinadoDientes", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>
 
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>
 
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        // line 57
        echo $this->env->getExtension('routing')->getPath("historialmedico_new");
        echo "\">
                            Crear un nuevo odontólogo
                        </a>
 
                    </ul>
                </center>
 
 
            ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:HistorialMedico:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  105 => 40,  93 => 34,  88 => 32,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  64 => 25,  61 => 24,  57 => 23,  37 => 5,  34 => 4,  29 => 66,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
