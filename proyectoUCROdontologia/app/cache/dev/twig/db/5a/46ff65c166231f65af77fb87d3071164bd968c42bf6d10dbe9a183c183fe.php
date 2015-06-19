<?php

/* ConnectionBDBundle:ConsentimientoInformado:show.html.twig */
class __TwigTemplate_db5a46ff65c166231f65af77fb87d3071164bd968c42bf6d10dbe9a183c183fe extends Twig_Template
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
        echo "<h1>Consentimiento Informado</h1>

<div class=\"box col-md-12\">
    <div class=\"box-inner\">
        <div class=\"box-header well\" data-original-title=\"\">
        </div>
        <div class=\"box-content\">
            <table c>
                <tbody>
                    <tr>
                        <th>Nombre</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rutaImagen", array()), "html", null, true);
        echo "</td>
                    </tr> 
                    <tr>
                        <th>Imagen</th>
                        <td>
                            
                            ";
        // line 20
        $context["foo"] = ("imagenes_consentimientos/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rutaImagen", array()));
        echo "    
                            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
        echo "\" alt=\"one\" height=\"800px\" width=\"500px\">

                        </td>
                    </tr> 
                </tbody>
            </table>

        </div>

        ";
        // line 30
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:ConsentimientoInformado:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 30,  49 => 21,  45 => 20,  36 => 14,  23 => 3,  21 => 2,  19 => 1,);
    }
}
