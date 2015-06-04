<?php

/* ConnectionBDBundle:HistorialMedico:index.html.twig */
class __TwigTemplate_1c03231bee6f8062f5b8324ae09f13247fc763a601e09e56189fe17af8d220fd extends Twig_Template
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
        // line 90
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
            echo "\">
                                    ";
            // line 26
            if (($this->getAttribute($context["entity"], "historialSocialTabaquismo", array()) == 1)) {
                // line 27
                echo "                                        &#x2713 
                                    ";
            }
            // line 29
            echo "                                    ";
            if (($this->getAttribute($context["entity"], "historialSocialTabaquismo", array()) != 1)) {
                // line 30
                echo "                                        Sin Sintomas
                                    ";
            }
            // line 31
            echo "</a></td>
                                <td>
                                    ";
            // line 33
            if (($this->getAttribute($context["entity"], "historialSocialAlcoholismo", array()) == 1)) {
                // line 34
                echo "                                        &#x2713 
                                    ";
            }
            // line 36
            echo "                                    ";
            if (($this->getAttribute($context["entity"], "historialSocialAlcoholismo", array()) != 1)) {
                // line 37
                echo "                                        Sin Sintomas 
                                    ";
            }
            // line 39
            echo "                                </td>
                                <td>
                                ";
            // line 41
            if (($this->getAttribute($context["entity"], "historiaDentalDolorMasticar", array()) == 1)) {
                // line 42
                echo "                                        &#x2713 
                                    ";
            }
            // line 44
            echo "                                ";
            if (($this->getAttribute($context["entity"], "historiaDentalDolorMasticar", array()) != 1)) {
                // line 45
                echo "                                        &#x2713 
                                    ";
            }
            // line 46
            echo "</td>
                                <td>
                                ";
            // line 48
            if (($this->getAttribute($context["entity"], "historiaDentalRechinadoDientes", array()) == 1)) {
                // line 49
                echo "                                        &#x2713 
                                    ";
            }
            // line 51
            echo "                                ";
            if (($this->getAttribute($context["entity"], "historiaDentalRechinadoDientes", array()) != 1)) {
                // line 52
                echo "                                        Sin Sintomas 
                                    ";
            }
            // line 53
            echo "</td>
                                <td>
                                    <ul>
                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>

                                        <a href=\"";
            // line 58
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
        // line 64
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
        // line 81
        echo $this->env->getExtension('routing')->getPath("historialmedico_new");
        echo "\">
                            Crear un nuevo historial médico
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
        return array (  173 => 81,  154 => 64,  142 => 58,  137 => 56,  132 => 53,  128 => 52,  125 => 51,  121 => 49,  119 => 48,  115 => 46,  111 => 45,  108 => 44,  104 => 42,  102 => 41,  98 => 39,  94 => 37,  91 => 36,  87 => 34,  85 => 33,  81 => 31,  77 => 30,  74 => 29,  70 => 27,  68 => 26,  64 => 25,  61 => 24,  57 => 23,  37 => 5,  34 => 4,  29 => 90,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
