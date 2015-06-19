<?php

/* ConnectionBDBundle:Cita:show.html.twig */
class __TwigTemplate_cbc03e49a9fa1aab45f34d29fe548cc09efb350ceabb4e1f20a0bfbe9b61fbe2 extends Twig_Template
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
        echo "
";
        // line 2
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_header.html.twig")->display($context);
        // line 3
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_menu_horizontal.html.twig")->display($context);
        // line 4
        echo "
    <div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Cita</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <tbody>
                         <tr>
                            <th style=\"width: 400px;\">Id Paciente</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idpaciente", array()), "html", null, true);
        echo "</td>
                        </tr>
                         <tr>
                            <th style=\"width: 400px;\">Fecha</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                        </tr>
                         <tr>
                            <th style=\"width: 400px;\">Hora</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hora", array()), "H:i"), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                </table>
            </div>
                            <center>
                                <table>

                                    <ul class=\"record_actions\">
                                        <td>
                                            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("cita");
        echo "\"class=\"btn btn-primary btn-sm\">
                                                Volver
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cita_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary btn-sm\">
                                                 Editar
                                            </a>
                                        </td>

                                        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                        <td>      
                                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                                        </td>
                                        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                       
                                    </ul>
                                    </td>
                                </table>
                            </center>
                                        
                                        
                                        
                                       
       <meta charset=\"utf-8\">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
    <meta name=\"author\" content=\"Muhammad Usman\">

    <!-- The styles -->
    <link id=\"bs-css\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
    <link href='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>

     <!-- jQuery -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

</head>

    <!-- topbar ends -->
<div class=\"ch-container\">
    <div class=\"row\">
        
        <!-- left menu starts -->
 
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class=\"alert alert-block col-md-12\">
                <h4 class=\"alert-heading\">Warning!</h4>

                <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id=\"content\" class=\"col-lg-10 col-sm-10\">
            <!-- content starts -->
                <div>
        <ul class=\"breadcrumb\">
            <li>
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Calendar</a>
            </li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                    <h2><i class=\"glyphicon glyphicon-calendar\"></i> Calendar</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">


                    <div id=\"calendar\"></div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class=\"row\">
        <div class=\"col-md-9 col-lg-9 col-xs-9  hidden-xs\">
            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <!-- Charisma Demo 2 -->
            <ins class=\"adsbygoogle\"
                 style=\"display:inline-block;width:728px;height:90px\"
                 data-ad-client=\"ca-pub-5108790028230107\"
                 data-ad-slot=\"3193373905\"></ins>
 
        </div>
    

    </div>
    <!-- Ad ends -->

    <hr>

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">

        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Settings</h3>
                </div>
                <div class=\"modal-body\">
                    <p>Here settings can be configured...</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
                    <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    

</div><!--/.fluid-container-->

";
        // line 197
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
        // line 198
        echo "                                        
                                        
        
        
  

    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Cita:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 198,  293 => 197,  175 => 82,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  149 => 74,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  125 => 68,  121 => 67,  117 => 66,  112 => 64,  92 => 47,  87 => 45,  82 => 43,  74 => 38,  66 => 33,  53 => 23,  46 => 19,  39 => 15,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
