<?php

/* AdministradorBundle:Default:index.html.twig */
class __TwigTemplate_c8fd9e76faaf85f6e9280768fa42f0549ab08b4cbe8af224f2937041b277e256 extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_menu_vertical.html.twig")->display($context);
        // line 3
        echo "
  


            <div class=\"box-header well\">
                <h2><i class=\"glyphicon glyphicon-info-sign\"></i> Introduction</h2>

               
            </div>
            <div class=\"box-content row\">
               
              

            </div> <!--/fin caja de contenido-->
      

 


";
        // line 22
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  44 => 22,  23 => 3,  21 => 2,  19 => 1,);
    }
}
