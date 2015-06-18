<?php

/* ConnectionBDBundle:Cita:index.html.twig */
class __TwigTemplate_3295b584028c3bdede0f23f9d3ca0fa17f3af6f5b2330d8c991bc66bab5fc035 extends Twig_Template
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
        // line 118
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Lista de Citas</h2>

            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>

                            <th>ID Paciente</th>
                            <th>Fecha</th>
                            <th>Hora</th>


                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                            <tr>

                                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cita_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idpaciente", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "hora", array()), "H:i"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>

                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cita_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>


                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cita_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>

                                    </ul>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                    </tbody>
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
        // line 63
        echo $this->env->getExtension('routing')->getPath("cita_new");
        echo "\">
                        <strong>Ingresar una Nueva Cita </strong>
                    </a>

                </ul>
            </center>
        </div>

    </div><!--/span-->

    <noscript>
    <div class=\"alert alert-block col-md-12\">
        <h4 class=\"alert-heading\">Warning!</h4>

        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a>
            enabled to use this site.</p>
    </div>
    </noscript>

    <div id=\"content\" class=\"col-lg-12 col-sm-12\">
        <!-- content starts -->
      

        <div class=\"row\">
            <div class=\"box col-md-12\">
                <div class=\"box-inner\">
                    <div class=\"box-header well\" data-original-title=\"\">
                        <h2><i class=\"glyphicon glyphicon-calendar\"></i> Calendar</h2>

                        <div class=\"box-icon\">
                            <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-cog\"></i></a>
                            <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-chevron-up\"></i></a>
                            <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-remove\"></i></a>
                        </div>
                    </div>
                    <div class=\"box-content\">


                        <div id=\"calendar\">
                            
                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div><!--/row-->

        <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Cita:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 63,  103 => 44,  90 => 37,  84 => 34,  77 => 30,  71 => 29,  65 => 28,  61 => 26,  57 => 25,  36 => 6,  33 => 4,  29 => 118,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
