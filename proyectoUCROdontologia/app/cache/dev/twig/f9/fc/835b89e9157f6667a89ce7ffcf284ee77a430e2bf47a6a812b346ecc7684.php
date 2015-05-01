<?php

/* ConnectionBDBundle:Odontologo:show.html.twig */
class __TwigTemplate_f9fc835b89e9157f6667a89ce7ffcf284ee77a430e2bf47a6a812b346ecc7684 extends Twig_Template
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
        // line 64
        echo "        ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Odontólogo</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <tbody>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telefono</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefono", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Correoelectronico</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoElectronico", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Practicante</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "practicante", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cedula</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
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
        // line 41
        echo $this->env->getExtension('routing')->getPath("odontologo");
        echo "\"class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>

                        <td>
                            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("odontologo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                Editar
                            </a>
                        </td>

                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <td>      
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                        </td>
                        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </ul>
                    </td>
                </table>
            </center>             


        ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:Odontologo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 56,  110 => 54,  105 => 52,  97 => 47,  88 => 41,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  34 => 4,  31 => 3,  26 => 64,  24 => 3,  22 => 2,  20 => 1,);
    }
}
