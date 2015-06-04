<?php

/* ConnectionBDBundle:Odontologo:show.html.twig */
class __TwigTemplate_c9aa884bfaf9a65e9ae759e8aa91c298cb242fe3734e6b74892edc70906b4135 extends Twig_Template
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
        // line 69
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
                            ";
        // line 26
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "practicante", array()) == 1)) {
            // line 27
            echo "                            <td> &#x2713 </td>
                            ";
        }
        // line 29
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "practicante", array()) != 1)) {
            // line 30
            echo "                            <td> No es Practicante </td>
                            ";
        }
        // line 32
        echo "                        </tr>
                        <tr>
                            <th>Cedula</th>
                            <td>";
        // line 35
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("odontologo");
        echo "\"class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>

                        <td>
                            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("odontologo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                Editar
                            </a>
                        </td>

                        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <td>      
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                        </td>
                        ";
        // line 61
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
        return array (  126 => 61,  121 => 59,  116 => 57,  108 => 52,  99 => 46,  85 => 35,  80 => 32,  76 => 30,  73 => 29,  69 => 27,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  34 => 4,  31 => 3,  26 => 69,  24 => 3,  22 => 2,  20 => 1,);
    }
}
