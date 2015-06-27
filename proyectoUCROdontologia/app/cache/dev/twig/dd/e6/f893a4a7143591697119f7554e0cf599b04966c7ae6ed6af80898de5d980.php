<?php

/* ConnectionBDBundle:ConsentimientoInformado:index.html.twig */
class __TwigTemplate_dde6f893a4a7143591697119f7554e0cf599b04966c7ae6ed6af80898de5d980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
     <div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Consentimiento Informado</h2>

            </div>
    <div class=\"box-content\">
    <table class=\"table table-bordered table-striped table-condensed\">
        <thead>
            <tr>
                <th>Num</th>
                <th>Rutaimagen</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consentimientoinformado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rutaImagen", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                  
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consentimientoinformado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Ver</a>
                   
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
 <center>
                <ul>

                    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("consentimientoinformado_new");
        echo "\">
             <strong>Nuevo consentimiento      </strong>      </a>

                </ul>
            </center>
        
</div>
";
        // line 45
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:ConsentimientoInformado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  81 => 38,  74 => 33,  62 => 27,  55 => 23,  49 => 22,  46 => 21,  42 => 20,  23 => 3,  21 => 2,  19 => 1,);
    }
}
