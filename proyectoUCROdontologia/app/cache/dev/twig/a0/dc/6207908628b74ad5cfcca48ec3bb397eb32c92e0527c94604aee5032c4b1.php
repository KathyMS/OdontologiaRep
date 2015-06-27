<?php

/* ConnectionBDBundle:ExamenRadiologico:new.html.twig */
class __TwigTemplate_a0dc6207908628b74ad5cfcca48ec3bb397eb32c92e0527c94604aee5032c4b1 extends Twig_Template
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
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "
    ";
        // line 116
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Crear Examen Radiológico</h2>
            </div>
            <center>
                <div class=\"box-content\">

                    <table class=\"table table-bordered table-striped table-condensed\">
                        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <body>      
                        <tr>
                            <th style=\"width: 400px;\"> Cresta Alveolcar </th>
                            <td> ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crestaAlveolar", array()), 'errors');
        echo "
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crestaAlveolar", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\"> Lamina Dura </th>
                            <td> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laminaDura", array()), 'errors');
        echo "
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "laminaDura", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Espacio de la Membrana Periodontal </th>
                            <td> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membranaPeriodontal", array()), 'errors');
        echo "
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membranaPeriodontal", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Cálculo</th>
                            <td> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculo", array()), 'errors');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculo", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Caries</th>
                            <td> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caries", array()), 'errors');
        echo "
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caries", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Restauraciones Dentales</th>
                            <td> ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retauracionesDentales", array()), 'errors');
        echo "
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retauracionesDentales", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Condiciones de Furcaciones</th>
                            <td> ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "furcaciones", array()), 'errors');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "furcaciones", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Anomalias Dentales</th>
                            <td> ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anomaliasDentales", array()), 'errors');
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anomaliasDentales", array()), 'widget');
        echo "</td>
                        </tr>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Patologias Maxilares</th>
                            <td> ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patologiasMaxilares", array()), 'errors');
        echo "
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patologiasMaxilares", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Morfologia Radicular</th>
                            <td> ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "morfologiaRadicular", array()), 'errors');
        echo "
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "morfologiaRadicular", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Relacion Corona-raiz/Hueso rematente</th>
                            <td> ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coronaRaizHuesoRematente", array()), 'errors');
        echo "
                                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coronaRaizHuesoRematente", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Terceros Morales</th>
                            <td> ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tercerosMolares", array()), 'errors');
        echo "
                                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tercerosMolares", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\"secuenciaErupcion>Secuencia de Erupción</th>
                            <td> ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secuenciaErupcion", array()), 'errors');
        echo "
                                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secuenciaErupcion", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Comentarios</th>
                            <td> ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comentarios", array()), 'errors');
        echo "
                                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comentarios", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 400px;\">Expediente</th>
                            <td> ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'errors');
        echo "
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idexpediente", array()), 'widget');
        echo "</td>
                        </tr>

                        </body>
                    </table>

                    <table>
                        <tr>

                            <td> ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                            </td>
                            <td>  <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("examenradiologico");
        echo "\" class=\"btn btn-primary btn-sm\">
                                    Volver
                                </a>
                            </td>

                        </tr>
                    </table>
                    ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </center>
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:ExamenRadiologico:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 110,  237 => 103,  232 => 101,  220 => 92,  216 => 91,  209 => 87,  205 => 86,  198 => 82,  194 => 81,  187 => 77,  183 => 76,  176 => 72,  172 => 71,  165 => 67,  161 => 66,  154 => 62,  150 => 61,  142 => 56,  138 => 55,  131 => 51,  127 => 50,  120 => 46,  116 => 45,  109 => 41,  105 => 40,  98 => 36,  94 => 35,  87 => 31,  83 => 30,  76 => 26,  72 => 25,  65 => 21,  61 => 20,  54 => 16,  50 => 15,  39 => 6,  36 => 4,  32 => 116,  29 => 115,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
