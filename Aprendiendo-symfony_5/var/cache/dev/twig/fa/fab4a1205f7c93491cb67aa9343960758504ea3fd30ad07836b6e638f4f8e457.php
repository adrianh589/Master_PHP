<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/funciones.html.twig */
class __TwigTemplate_700fc855f42a7b9817848374a3c80c3e2137e764c9ab0e63dba1e7dd2e216b0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/funciones.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/funciones.html.twig"));

        // line 2
        echo "<hr>

";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "

<h1>Funciones</h1>
";
        // line 7
        echo twig_escape_filter($this->env, min([0 => 8, 1 => 5, 2 => 3, 3 => 1, 4 => 0, 5 => 5]), "html", null, true);
        echo " ";
        // line 8
        echo "
<br>

";
        // line 11
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "

<br>
";
        // line 14
        echo twig_escape_filter($this->env, max([0 => 8, 1 => 5, 2 => 3, 3 => 1, 4 => 0, 5 => 5]), "html", null, true);
        echo " ";
        // line 15
        echo "
<br>

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            // line 19
            echo "    * ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<h1>Filtros</h1>
";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "

";
        // line 25
        $context["email"] = "      email@email.com      ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_lower_filter($this->env, twig_upper_filter($this->env, twig_trim_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })())))));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/funciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  98 => 25,  93 => 23,  89 => 21,  80 => 19,  75 => 18,  70 => 15,  67 => 14,  61 => 11,  56 => 8,  53 => 7,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Funciones predifinidas #}
<hr>

{{ nombre }}

<h1>Funciones</h1>
{{ min([8,5,3,1,0,5]) }} {# Saca el numero minimo #}

<br>

{{ random(animales) }}

<br>
{{ max([8,5,3,1,0,5]) }} {# Saca el numero maximo #}

<br>

{% for i in range(0, 100, 5) %} {# Esta funcion es range(inicio, final, salto) #}
    * {{ i }}<br>
{% endfor %}

<h1>Filtros</h1>
{{ animales|length }}

{% set email = '      email@email.com      ' %}
{{ dump(email|trim|upper|lower) }}", "partials/funciones.html.twig", "/opt/lampp/htdocs/web/Master_PHP/aprendiendo-symfony/templates/partials/funciones.html.twig");
    }
}
