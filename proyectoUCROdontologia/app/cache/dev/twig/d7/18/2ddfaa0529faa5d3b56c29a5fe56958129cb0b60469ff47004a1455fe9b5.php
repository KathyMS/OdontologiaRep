<?php

/* ConnectionBDBundle:PlanDeTratamiento:show.html.twig */
class __TwigTemplate_d7182ddfaa0529faa5d3b56c29a5fe56958129cb0b60469ff47004a1455fe9b5 extends Twig_Template
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
        // line 58
        echo "        ";
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Plan De Tratamiento</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    
                    <tbody>
                        <tr>
                            <th style=\"width: 400px;\">Expediente</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexpediente", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Descripcion</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d"), "html", null, true);
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
        // line 35
        echo $this->env->getExtension('routing')->getPath("plandetratamiento");
        echo "\"class=\"btn btn-primary btn-sm\">
                                Volver
                            </a>
                        </td>
                        <td>
                            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plandetratamiento_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary btn-sm\">
                                Editar
                            </a>
                        </td>

                        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <td>      
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                        </td>
                        ";
        // line 49
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
        return "ConnectionBDBundle:PlanDeTratamiento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  99 => 47,  94 => 45,  86 => 40,  78 => 35,  64 => 24,  57 => 20,  50 => 16,  37 => 5,  34 => 4,  29 => 58,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
