<?php

/* AdministradorBundle:Default:administrador_menu_vertical.html.twig */
class __TwigTemplate_88b8454918fe524a661f9abd7654617050147a75a66c81d25c786b39c4fc5dbf extends Twig_Template
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
        echo "   <!-- left menu starts -->
        <div class=\"col-sm-2 col-lg-2\">
            <div class=\"sidebar-nav\">
                <div class=\"nav-canvas\">
                    <div class=\"nav-sm nav nav-stacked\">

                    </div>
                    <ul class=\"nav nav-pills nav-stacked main-menu\">
                        <li class=\"nav-header\">Menu Principal</li>
                        <li><a class=\"ajax-link\" href=\"index.html\"><i class=\"glyphicon glyphicon-home\"></i><span> Inicio</span></a>
                        </li>
                         <li><a class=\"ajax-link\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("paciente");
        echo "\"><i
                                    class=\"glyphicon glyphicon-user\"></i><span> Paciente</span></a></li>
                        <li><a class=\"ajax-link\" href=\"calendar.html\"><i class=\"glyphicon glyphicon-calendar\"></i><span> Citas</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("odontologo");
        echo "\"><i
                                    class=\"glyphicon glyphicon-user\"></i><span> Odontologos</span></a></li>
                        <li><a class=\"ajax-link\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("tratamientogeneral");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i><span> Tratamieintos</span></a>
                        </li>
                       <li><a class=\"ajax-link\" href=\"chart.html\"><i class=\"glyphicon glyphicon-list-alt\"></i><span> Reportes</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
      

        <div id=\"content\" class=\"col-lg-10 col-sm-10\">
            <!-- content starts -->
         
<div class=\"row\">
    <div class=\"box col-md-12\">
        <div class=\"box-inner\">";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:administrador_menu_vertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  39 => 16,  32 => 12,  19 => 1,);
    }
}
