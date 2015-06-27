<?php

/* ConnectionBDBundle:TratamientoGeneral:show.html.twig */
class __TwigTemplate_74704af63e2bfc729141006db34d135a9b5dca43167c928bc4853f3e51585897 extends Twig_Template
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
        // line 51
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Tratamiento General</h2>
            </div>
            <div class=\"box-content\">
                <table class=\"table table-bordered table-striped table-condensed\">
                    <tbody>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreTratamiento", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Descripción</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</td>
                        </tr>                      
                    </tbody>
                </table>


                <center>
                    <table>

                        <ul class=\"record_actions\">
                            <td>
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tratamientogeneral");
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Volver
                                </a>
                            </td>

                            <td>
                                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tratamientogeneral_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\">
                                    Editar
                                </a>
                            </td>
                            </td>
                            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <td > 
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                            </td>
                            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </ul>
                        </td>
                    </table>
                </center>  
            </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:TratamientoGeneral:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  88 => 42,  83 => 40,  75 => 35,  66 => 29,  52 => 18,  45 => 14,  33 => 4,  30 => 3,  26 => 51,  24 => 3,  22 => 2,  20 => 1,);
    }
}
