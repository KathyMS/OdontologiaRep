<?php

/* ConnectionBDBundle:ExamenRadiologico:index.html.twig */
class __TwigTemplate_a745a2fa7c64a40a193a6dd258bc8130d9beeb13c77158fe87007cb058ad9458 extends Twig_Template
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
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Examen Radiológico</h2>

            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>
                            <th>Cresta Alveolar</th>
                            <th>Lamina Dura</th>               
                            <th>Calculo</th>
                            <th>Caries</th>
                            <th>Cond. de Furcaciones</th>
                            <th>Anomalias Dentales</th>                                                  
                            <th>Comentarios</th>

                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                            <tr>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "crestaAlveolar", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "laminaDura", array()), "html", null, true);
            echo "</td>
                               
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calculo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "caries", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "furcaciones", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anomaliasDentales", array()), "html", null, true);
            echo "</td>            
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "comentarios", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examenradiologico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-sm\">Ver</a>

                                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examenradiologico_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-sm\">Editar</a>
<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examenradiologico_pdf", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-sm\" style=\"width:40px; height:30px\">PDF</a>

                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        // line 69
        echo $this->env->getExtension('routing')->getPath("examenradiologico_new");
        echo "\">
                        <strong>Ingresar un Nuevo Examen Radiológico </strong>
                    </a>

                </ul>
            </center>
        </div>

    </div><!--/span-->

";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:ExamenRadiologico:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 69,  122 => 49,  110 => 43,  106 => 42,  101 => 40,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  74 => 31,  70 => 30,  67 => 29,  63 => 28,  40 => 7,  37 => 5,  33 => 81,  30 => 80,  28 => 5,  24 => 3,  22 => 2,  20 => 1,);
    }
}
