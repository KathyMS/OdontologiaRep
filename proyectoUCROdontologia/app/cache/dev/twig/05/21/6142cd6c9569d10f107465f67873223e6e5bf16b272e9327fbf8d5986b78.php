<?php

/* ConnectionBDBundle:Cita:edit.html.twig */
class __TwigTemplate_05216142cd6c9569d10f107465f67873223e6e5bf16b272e9327fbf8d5986b78 extends Twig_Template
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
        // line 64
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Editar Cita</h2>

            </div>
            <center>
                <div class=\"box-content\">
                    <table class=\"table table-bordered table-striped table-condensed\">

                        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                        <tbody>
                            <tr>
                                <th style=\"width: 400px;\"> ID Paciente </th>
                                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idpaciente", array()), 'widget');
        echo "
                                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idpaciente", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> Fecha </th>
                                <td> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'widget');
        echo "
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 400px;\"> Hora</th>
                                <td> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hora", array()), 'widget');
        echo "
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hora", array()), 'errors');
        echo "</td>
                            </tr>

                        </tbody>

                    </table>
                </div>

                <table>
                    <tr>

                        <td> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
                        </td>


                        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <td>  <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("cita");
        echo "\" class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>
                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <td > 
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                        </td>
                        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                    </tr>
                </table>
            </center>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Cita:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  122 => 54,  117 => 52,  110 => 48,  106 => 47,  99 => 43,  85 => 32,  81 => 31,  74 => 27,  70 => 26,  63 => 22,  59 => 21,  52 => 17,  48 => 16,  36 => 6,  33 => 4,  29 => 64,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
