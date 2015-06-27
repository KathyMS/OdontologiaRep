<?php

/* ConnectionBDBundle:TratamientoGeneral:new.html.twig */
class __TwigTemplate_9ec41f4ae0ff0db298f08ed7a2eef2097846f4f58c11d856c4e7bc7f73e800cb extends Twig_Template
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
        // line 45
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                    <h2>Crear tratamiento general</h2>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreTratamiento", array()), 'label');
        echo "</th>
                                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreTratamiento", array()), 'widget');
        echo "
                                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreTratamiento", array()), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <th style=\"width: 400px;\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "</th>
                                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <table>
                    <tr>

                        <td> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                        </td>
                        <td>  <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("tratamientogeneral");
        echo "\" class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>

                    </tr>
                </table>

                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </center>
            </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:TratamientoGeneral:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  91 => 33,  86 => 31,  75 => 23,  71 => 22,  67 => 21,  61 => 18,  57 => 17,  53 => 16,  47 => 13,  43 => 12,  33 => 4,  30 => 3,  26 => 45,  24 => 3,  22 => 2,  20 => 1,);
    }
}
