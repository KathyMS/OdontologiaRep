<?php

/* AdministradorBundle:Default:administrador_menu_horizontal.html.twig */
class __TwigTemplate_074206efe78d8b97cb98da3d27ba54abf7ade812a60098b7ee58b530a7b37d03 extends Twig_Template
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
                        <li><a class=\"ajax-link\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Inicio</span></a>
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
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i><span> Tratamientos</span></a>
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
         
<div class=\" row\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"6 new members.\" class=\"well top-block\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("paciente");
        echo "\">
            <i class=\"glyphicon glyphicon-user blue\"></i>

            <div>Informacion Personal</div>
            
           
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"4 new pro members.\" class=\"well top-block\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getUrl("encargado");
        echo "\">
            <i class=\"glyphicon glyphicon-star green\"></i>

            <div>Encargado</div>
           
           
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"\$34 new sales.\" class=\"well top-block\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("historialmedico");
        echo "\">
            <i class=\"glyphicon glyphicon-shopping-cart yellow\"></i>

            <div>Historial Medico</div>
           
           
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"12 new messages.\" class=\"well top-block\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getUrl("examenradiologico");
        echo "\">
            <i class=\"glyphicon glyphicon-envelope red\"></i>

            <div>Examen Radiologico</div>
           
           
        </a>
    </div>
</div>

<div class=\"row\">
    <div class=\"box col-md-12\">
        <div class=\"box-inner\">";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:administrador_menu_horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 65,  93 => 55,  80 => 45,  67 => 35,  47 => 18,  42 => 16,  35 => 12,  30 => 10,  19 => 1,);
    }
}
