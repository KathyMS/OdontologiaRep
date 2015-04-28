<?php

/* AdministradorBundle:Default:administrador_footer.html.twig */
class __TwigTemplate_8eb74bb21f186085104ba9a37b8162f8810980a672ac62f54661ffdca0fccb5b extends Twig_Template
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
<html> 
</div>
</div>
</div>
<hr>



<footer class=\"row\">
    <p class=\"col-md-9 col-sm-9 col-xs-12 copyright\">&copy; <a href=\"http://usman.it\" target=\"_blank\">Muhammad
            Usman</a> 2012 - 2014</p>

        <p class=\"col-md-3 col-sm-3 col-xs-12 powered-by\">Powered by: <a
                href=\"http://usman.it/free-responsive-admin-template\">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<!-- calender plugin -->
<script src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<!-- tour plugin -->
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/administrador/js/charisma.js"), "html", null, true);
        echo "\"></script>


</body>
</html>\t";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:administrador_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  101 => 48,  96 => 46,  91 => 44,  85 => 41,  80 => 39,  74 => 36,  69 => 34,  64 => 32,  58 => 29,  53 => 27,  49 => 26,  42 => 22,  19 => 1,);
    }
}
