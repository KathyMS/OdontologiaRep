<?php

/* ConnectionBDBundle:Odontologo:new.html.twig */
class __TwigTemplate_3455ac27ef329e7a69e4b3f1c2cd3140ed455645f821d27198bbb323b87dd232 extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_menu_vertical.html.twig")->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "    ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Crear Odontologo</h2>
            </div>
            <center>
                <div class=\"box-content\">
                    <table class=\"table table-bordered table-striped table-condensed\">
                        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <tbody>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</th>
                                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "</th>
                                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget');
        echo "
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'label');
        echo "</th>
                                <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'widget');
        echo "
                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoElectronico", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "practicante", array()), 'label');
        echo "</th>
                                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "practicante", array()), 'widget');
        echo "
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "practicante", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'label');
        echo "</th>
                                <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'errors');
        echo "</td>
                            </tr>
                    </table>
                </div>
                <table>
                    <tr>

                        <td> ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                        </td>
                        <td>  <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("odontologo");
        echo "\" class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>

                    </tr>
                </table>

                ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </center>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Odontologo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 55,  133 => 47,  128 => 45,  118 => 38,  114 => 37,  110 => 36,  104 => 33,  100 => 32,  96 => 31,  90 => 28,  86 => 27,  82 => 26,  76 => 23,  72 => 22,  68 => 21,  62 => 18,  58 => 17,  54 => 16,  48 => 13,  44 => 12,  34 => 4,  31 => 3,  26 => 59,  24 => 3,  22 => 2,  20 => 1,);
    }
}
