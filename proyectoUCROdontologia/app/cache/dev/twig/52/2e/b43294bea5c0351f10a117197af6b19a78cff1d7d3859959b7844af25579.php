<?php

/* AdministradorBundle:Default:administrador_header.html.twig */
class __TwigTemplate_522eb43294bea5c0351f10a117197af6b19a78cff1d7d3859959b7844af25579 extends Twig_Template
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
        echo "<html lang=\"en\">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset=\"utf-8\">
    <title>Free HTML5 Bootstrap Admin Template</title>
    

    <!-- The styles -->
    <link id=\"bs-css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>

    <!-- jQuery -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

</head>

<body>
    <!-- topbar starts -->
    <div class=\"navbar navbar-default\" role=\"navigation\">

        <div class=\"navbar-inner\">
            <button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\"> <img alt=\"Charisma Logo\" src=\"img/logo20.png\" class=\"hidden-xs\"/>
                <span>Odonto</span></a>

            <!-- user dropdown del perfil -->
            <div class=\"btn-group pull-right\">
                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-sm hidden-xs\"> admin</span>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Perfil</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"login.html\">Salir</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

          

            <ul class=\"collapse navbar-collapse nav navbar-nav top-menu\">
                
                <li>
                    <form class=\"navbar-search pull-left\">
                        <input placeholder=\"Buscar\" class=\"search-query form-control col-md-10\" name=\"query\"
                               type=\"text\">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    
    <!-- topbar ends -->
    
    
<html>
    
<div class=\"ch-container\">
    <div class=\"row\">
    </html>
";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:administrador_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  47 => 24,  42 => 22,  19 => 1,);
    }
}
