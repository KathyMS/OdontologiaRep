<?php

/* AdministradorBundle:Default:tempCita.html.twig */
class __TwigTemplate_121d7727177786895a1463d64aa8f3d0a4496060f7b0177eeeeb56ff2d6480fd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
    <meta name=\"author\" content=\"Muhammad Usman\">

    <!-- The styles -->
    <link id=\"bs-css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src=\"";
        // line 43
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
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class=\"btn-group pull-right\">
                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-sm hidden-xs\"> admin</span>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Profile</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"login.html\">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class=\"btn-group pull-right theme-container animated tada\">
                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-tint\"></i><span
                        class=\"hidden-sm hidden-xs\"> Change Theme / Skin</span>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" id=\"themes\">
                    <li><a data-value=\"classic\" href=\"#\"><i class=\"whitespace\"></i> Classic</a></li>
                    <li><a data-value=\"cerulean\" href=\"#\"><i class=\"whitespace\"></i> Cerulean</a></li>
                    <li><a data-value=\"cyborg\" href=\"#\"><i class=\"whitespace\"></i> Cyborg</a></li>
                    <li><a data-value=\"simplex\" href=\"#\"><i class=\"whitespace\"></i> Simplex</a></li>
                    <li><a data-value=\"darkly\" href=\"#\"><i class=\"whitespace\"></i> Darkly</a></li>
                    <li><a data-value=\"lumen\" href=\"#\"><i class=\"whitespace\"></i> Lumen</a></li>
                    <li><a data-value=\"slate\" href=\"#\"><i class=\"whitespace\"></i> Slate</a></li>
                    <li><a data-value=\"spacelab\" href=\"#\"><i class=\"whitespace\"></i> Spacelab</a></li>
                    <li><a data-value=\"united\" href=\"#\"><i class=\"whitespace\"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class=\"collapse navbar-collapse nav navbar-nav top-menu\">
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-globe\"></i> Visit Site</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-star\"></i> Dropdown <span
                            class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class=\"navbar-search pull-left\">
                        <input placeholder=\"Search\" class=\"search-query form-control col-md-10\" name=\"query\"
                               type=\"text\">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class=\"ch-container\">
    <div class=\"row\">
        
        <!-- left menu starts -->
        <div class=\"col-sm-2 col-lg-2\">
            <div class=\"sidebar-nav\">
                <div class=\"nav-canvas\">
                    <div class=\"nav-sm nav nav-stacked\">

                    </div>
                    <ul class=\"nav nav-pills nav-stacked main-menu\">
                        <li class=\"nav-header\">Main</li>
                        <li><a class=\"ajax-link\" href=\"index.html\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"ui.html\"><i class=\"glyphicon glyphicon-eye-open\"></i><span> UI Features</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"form.html\"><i
                                    class=\"glyphicon glyphicon-edit\"></i><span> Forms</span></a></li>
                        <li><a class=\"ajax-link\" href=\"chart.html\"><i class=\"glyphicon glyphicon-list-alt\"></i><span> Charts</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"typography.html\"><i class=\"glyphicon glyphicon-font\"></i><span> Typography</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"gallery.html\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>
                        <li class=\"nav-header hidden-md\">Sample Section</li>
                        <li><a class=\"ajax-link\" href=\"table.html\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Tables</span></a></li>
                        <li class=\"accordion\">
                            <a href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i><span> Accordion Menu</span></a>
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li><a href=\"#\">Child Menu 1</a></li>
                                <li><a href=\"#\">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class=\"ajax-link\" href=\"calendar.html\"><i class=\"glyphicon glyphicon-calendar\"></i><span> Calendar</span></a>
                        </li>
                        <li><a class=\"ajax-link\" href=\"grid.html\"><i
                                    class=\"glyphicon glyphicon-th\"></i><span> Grid</span></a></li>
                        <li><a href=\"tour.html\"><i class=\"glyphicon glyphicon-globe\"></i><span> Tour</span></a></li>
                        <li><a class=\"ajax-link\" href=\"icon.html\"><i
                                    class=\"glyphicon glyphicon-star\"></i><span> Icons</span></a></li>
                        <li><a href=\"error.html\"><i class=\"glyphicon glyphicon-ban-circle\"></i><span> Error Page</span></a>
                        </li>
                        <li><a href=\"login.html\"><i class=\"glyphicon glyphicon-lock\"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id=\"for-is-ajax\" for=\"is-ajax\"><input id=\"is-ajax\" type=\"checkbox\"> Ajax on menu</label>
                </div>
            </div>
        </div>
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
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class=\"col-md-2 col-lg-3 col-sm-12 col-xs-12 donate\">
            <div>
                <small>Help development of Charisma</small>
            </div>
            <a class=\"btn btn-default\" href=\"http://flattr.com/thing/1507720/usmanhalalitcharisma-on-GitHub\"
               target=\"_blank\"><i class=\"glyphicon glyphicon-usd green\"></i> Donate</a>
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

    <footer class=\"row\">
        <p class=\"col-md-9 col-sm-9 col-xs-12 copyright\">&copy; <a href=\"http://usman.it\" target=\"_blank\">Muhammad
                Usman</a> 2012 - 2014</p>

        <p class=\"col-md-3 col-sm-3 col-xs-12 powered-by\">Powered by: <a
                href=\"http://usman.it/free-responsive-admin-template\">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<!-- calender plugin -->
<script src='";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
<!-- tour plugin -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/charisma.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:tempCita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 324,  399 => 322,  394 => 320,  389 => 318,  384 => 316,  379 => 314,  374 => 312,  369 => 310,  364 => 308,  359 => 306,  354 => 304,  348 => 301,  343 => 299,  339 => 298,  334 => 296,  328 => 293,  75 => 43,  58 => 29,  54 => 28,  50 => 27,  45 => 25,  19 => 1,);
    }
}
