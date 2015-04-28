<?php

/* ConnectionBDBundle:HistorialMedico:new.html.twig */
class __TwigTemplate_2c3b094e6792c832afc8ebb6c7fc9d3f98035f031067e6095d215cd10070bbec extends Twig_Template
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
        // line 17
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>HistorialMedico creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("historialmedico");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:HistorialMedico:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  40 => 7,  36 => 5,  33 => 4,  29 => 17,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
