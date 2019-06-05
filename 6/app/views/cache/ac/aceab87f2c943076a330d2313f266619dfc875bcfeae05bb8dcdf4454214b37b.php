<?php

/* turnoModificado.html */
class __TwigTemplate_c38654825777edab4daea14cca4c1348f4eebf46b5109de1ba24bfed109ba27e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnoModificado.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Turno Reservado";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "partials/nav.html");
        echo "
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
         <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "<h2>Turno Modificado </h2>
<h3>Gracias por atenderse con nosotros. </h3>
 <div class=\"turno\">
  <section class=\"fieldsPaciente\">
       <div class=\"field\">
            <label>
               <b>Paciente:</b>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "paciente", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> tel: </b>
                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "telefono", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> email: </b>
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "email", array()), "html", null, true);
        echo "
            </label>
        </div>
        <br>
        <div class=\"field\">
            <label>  <b> edad: </b>
                ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "edad", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> talla de calzado: </b>
            ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> altura: </b>
            ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "altura", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Fecha de Nacimiento: </b>
            ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Color de pelo: </b>
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "color_pelo", array()), "html", null, true);
        echo "
            </label>
        </div>
    </section>

    <section class=\"fieldsTurno\">
        <div class=\"field\">
            <label> <b> fecha del turno: </b>
                        ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> hora del turno: </b>
                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "hora_turno", array()), "html", null, true);
        echo "
            </label>
        </div>
        
            
     </section>
</div>

";
    }

    public function getTemplateName()
    {
        return "turnoModificado.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 72,  143 => 67,  132 => 59,  124 => 54,  116 => 49,  108 => 44,  100 => 39,  91 => 33,  83 => 28,  75 => 23,  66 => 16,  63 => 15,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Turno Reservado{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
         <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block main %}
<h2>Turno Modificado </h2>
<h3>Gracias por atenderse con nosotros. </h3>
 <div class=\"turno\">
  <section class=\"fieldsPaciente\">
       <div class=\"field\">
            <label>
               <b>Paciente:</b>
                {{turnoX.paciente}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> tel: </b>
                {{turnoX.telefono}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> email: </b>
            {{turnoX.email}}
            </label>
        </div>
        <br>
        <div class=\"field\">
            <label>  <b> edad: </b>
                {{turnoX.edad}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> talla de calzado: </b>
            {{turnoX.talla_calzado}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> altura: </b>
            {{turnoX.altura}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Fecha de Nacimiento: </b>
            {{turnoX.fecha_nacimiento}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Color de pelo: </b>
            {{turnoX.color_pelo}}
            </label>
        </div>
    </section>

    <section class=\"fieldsTurno\">
        <div class=\"field\">
            <label> <b> fecha del turno: </b>
                        {{turnoX.fecha_turno}}
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> hora del turno: </b>
                    {{turnoX.hora_turno}}
            </label>
        </div>
        
            
     </section>
</div>

{% endblock %}
", "turnoModificado.html", "C:\\Users\\Maxi\\Downloads\\PAWTP4(2)\\paw-tp4-master\\4 - copia\\app\\views\\turnoModificado.html");
    }
}
