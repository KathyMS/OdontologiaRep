<?php

/* ConnectionBDBundle:ConsentimientoInformado:new.html.twig */
class __TwigTemplate_ce7efe4d3ec288c84a3e95921ebdf8b7c5e7b493a6901d1a1738ac81bff338de extends Twig_Template
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
        $this->displayBlock('body', $context, $blocks);
        // line 70
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Crear Consentimiento Informado</h2>
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
                                <th style=\"width: 400px;\">  Paciente </th>
                                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'widget');
        echo "
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr hidden=\"true\">
                                <th style=\"width: 400px;\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rutaImagen", array()), 'label');
        echo "</th>
                                <td> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rutaImagen", array()), 'widget');
        echo "
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rutaImagen", array()), 'errors');
        echo "</td>
                            </tr>

                           

                          
                    </table>     
                            
                                    <table hidden=\"true\">
                                        <tr>

                                            <td> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                                            </td>
                                            <td>  <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("paciente");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                    Volver
                                                </a>
                                            </td>

                                        </tr>
                                    </table>
                                                    
                                    <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"aSubirImagen\">
                                        ";
        // line 45
        if (array_key_exists("message", $context)) {
            // line 46
            echo "                                            <p class=\"help-block\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></p>
                                            ";
        }
        // line 48
        echo "                                            ";
        if (array_key_exists("error", $context)) {
            // line 49
            echo "                                            <p class=\"help-block\"><font color=\"#FF0000\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</font></p>
                                            ";
        }
        // line 51
        echo "                                        <h4>Busque la imagen del consentimiento informado</h4>


                                        <div class=\"form-group\">
                                            <label for=\"exampleInputFile\">Imagen</label>
                                            <input type=\"file\" id=\"exampleInputFile\" name=\"archivo\">

                                        </div>

                                        <button class=\"btn btn-primary btn-sm\">Guardar</button>
                                    </form>
                </div>

                  
                ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </center>
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:ConsentimientoInformado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 65,  120 => 51,  114 => 49,  111 => 48,  105 => 46,  103 => 45,  91 => 36,  86 => 34,  72 => 23,  68 => 22,  64 => 21,  58 => 18,  54 => 17,  47 => 13,  43 => 12,  33 => 4,  30 => 3,  26 => 70,  24 => 3,  22 => 2,  20 => 1,);
    }
}
