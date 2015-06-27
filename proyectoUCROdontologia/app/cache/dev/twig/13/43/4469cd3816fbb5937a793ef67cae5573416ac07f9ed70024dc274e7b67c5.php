<?php

/* ConnectionBDBundle:ExamenRadiologico:show.html.twig */
class __TwigTemplate_13434469cd3816fbb5937a793ef67cae5573416ac07f9ed70024dc274e7b67c5 extends Twig_Template
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
        // line 103
        echo "
    ";
        // line 104
        $this->env->loadTemplate("AdministradorBundle:Default:administrador_footer.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2>Examen Radiológico</h2>
            </div>
            <table class=\"table table-bordered table-striped table-condensed\">
                <tbody>
                    <tr>
                        <th>Cresta Alveolar</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "crestaAlveolar", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Lamina Dura</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "laminaDura", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Espacio de la Membrana Periodontal</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "membranaPeriodontal", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cálculo</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calculo", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Caries</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "caries", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Restauraciones Dentales</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "retauracionesDentales", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Condiciones de Furcaciones</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "furcaciones", array()), "html", null, true);
        echo "</td>
                    </tr>                    
                    <tr>
                        <th>Anomalias Dentales</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anomaliasDentales", array()), "html", null, true);
        echo "</td>
                    </tr>                   
                    <tr>
                        <th>Patologias Maxilares</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patologiasMaxilares", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Morfologia Radicular</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "morfologiaRadicular", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Relacion Corona-raiz/Hueso rematente</th>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coronaRaizHuesoRematente", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Terceros Morales</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tercerosMolares", array()), "html", null, true);
        echo "</td>
                    </tr>                   
                    <tr>
                        <th>Secuencia de Erupción</th>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuenciaErupcion", array()), "html", null, true);
        echo "</td>
                    </tr>      
                    <tr>
                        <th>Comentarios</th>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comentarios", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Expediente</th>
                        <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexpediente", array()), "html", null, true);
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
        // line 82
        echo $this->env->getExtension('routing')->getPath("examenradiologico");
        echo "\"class=\"btn btn-primary btn-sm\">
                            Volver
                        </a>
                    </td>
                    <td>
                        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examenradiologico_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary btn-sm\">
                            Editar
                        </a>
                    </td>

                    ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <td>      
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " 
                    </td>
                    ";
        // line 96
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
        return "ConnectionBDBundle:ExamenRadiologico:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 96,  184 => 94,  179 => 92,  171 => 87,  163 => 82,  148 => 70,  141 => 66,  134 => 62,  127 => 58,  120 => 54,  113 => 50,  106 => 46,  99 => 42,  92 => 38,  85 => 34,  78 => 30,  71 => 26,  64 => 22,  57 => 18,  50 => 14,  39 => 5,  36 => 4,  32 => 104,  29 => 103,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
