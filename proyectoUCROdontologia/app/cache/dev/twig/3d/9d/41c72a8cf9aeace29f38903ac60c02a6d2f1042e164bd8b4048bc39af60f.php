<?php

/* ConnectionBDBundle:PlanDeTratamiento:index.html.twig */
class __TwigTemplate_3d9d41c72a8cf9aeace29f38903ac60c02a6d2f1042e164bd8b4048bc39af60f extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Plan de Tratamiento</h2>

            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <thead>
                        <tr>

                   
                <th>Descripcion</th>
                <th>Fecha</th>
               

                        </tr>
                    </thead>
  
        <tbody>
            
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
               
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plandetratamiento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                   
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plandetratamiento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Mostar</a>
                    
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plandetratamiento_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editar</a>
                    
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
  
        
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
        echo $this->env->getExtension('routing')->getPath("plandetratamiento_new");
        echo "\">
                Ingresar un nuevo tratamieinto
            </a>

            </ul>
</center>
        </div>

    </div><!--/span-->

     
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:PlanDeTratamiento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 63,  99 => 43,  87 => 37,  82 => 35,  71 => 31,  67 => 30,  63 => 28,  59 => 27,  36 => 6,  33 => 4,  29 => 75,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
