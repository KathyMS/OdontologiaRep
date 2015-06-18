<?php

/* ConnectionBDBundle:ConsentimientoInformado:index.html.twig */
class __TwigTemplate_5d28ebe038a6a23e272b12e57e5d4479d397c5a226d892ad3d0a9c9f642caa84 extends Twig_Template
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

<center>
    <div class=\"box-content\">
        <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("aSubirImagen");
        echo "\">
            ";
        // line 8
        if (array_key_exists("message", $context)) {
            // line 9
            echo "                <p class=\"help-block\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></p>
                ";
        }
        // line 11
        echo "                ";
        if (array_key_exists("error", $context)) {
            // line 12
            echo "                <p class=\"help-block\"><font color=\"#FF0000\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</font></p>
                ";
        }
        // line 14
        echo "            <h4>Busque la imagen del consentimiento informado</h4>

            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Descripción</label>
                <input type=\"text\" class=\"form-control\" id=\"inputSuccess1\" name=\"descripcion\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputFile\">Imagen</label>
                <input type=\"file\" id=\"exampleInputFile\" name=\"archivo\">

            </div>

            <button class=\"btn btn-info btn-sm\">Guardar</button>
        </form>
    </div>
</center>

";
        // line 31
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
        // line 32
        echo "
";
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
        return array (  71 => 32,  69 => 31,  50 => 14,  44 => 12,  41 => 11,  35 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
