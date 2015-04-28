<?php

/* ConnectionBDBundle:Paciente:new.html.twig */
class __TwigTemplate_4097ec4cb330235d6adee19f2a81becb9e2c7ce2f9c837abdd1a23993dc666c1 extends Twig_Template
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
        // line 23
        echo "  ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Crear Paciente</h2>
            </div>
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            <table>
                <ul class=\"record_actions\">
                    <td>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\">
                            <strong>    Volver </strong>  
                        </a>
                    </td>
                </ul>
            </table>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Paciente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  44 => 11,  37 => 6,  34 => 4,  29 => 23,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
