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

/* home/animales.html.twig */
class __TwigTemplate_5dc8647ad40d715dd5aabff1e08282bce7daac6417bfb32ff4badc63bd7cda46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'cabecera' => [$this, 'block_cabecera'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $this->parent = $this->loadTemplate("layouts/master.html.twig", "home/animales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "    Animal
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_cabecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        // line 8
        echo "    ";
        $this->displayParentBlock("cabecera", $context, $blocks);
        echo " <!-- Con parent llamamos al contenido de la plantilla maestra -->
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 13
        echo "    ";
        // line 18
        echo "
    ";
        // line 20
        echo "
    ";
        // line 21
        $context["perro"] = "Dobberman";
        // line 22
        echo "
    <h4>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["perro"]) || array_key_exists("perro", $context) ? $context["perro"] : (function () { throw new RuntimeError('Variable "perro" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h4>

    ";
        // line 26
        echo "    <h3>Los animales son:</h3>
    ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 27, $this->source); })()));
        echo " <!-- Con dump se impirmen los arrays en twig -->
    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 28, $this->source); })()), 1, [], "array", false, false, false, 28), "html", null, true);
        echo " <!-- Asi se saca un elemento -->

    ";
        // line 31
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 31, $this->source); })()));
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 32, $this->source); })()), "Perros", [], "any", false, false, false, 32), 0, [], "any", false, false, false, 32) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 32, $this->source); })()), "Perros", [], "any", false, false, false, 32), 1, [], "any", false, false, false, 32)), "html", null, true);
        // line 33
        echo "

    ";
        // line 36
        echo "    ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 36, $this->source); })()), "Perros", [], "any", false, false, false, 36), 0, [], "any", false, false, false, 36), "dobberman")) {
            // line 37
            echo "        <h2>Si es un dobberman, cuidado</h2>
    ";
        } else {
            // line 39
            echo "        <h2>NO es un dobberman, rela</h2>
    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        if (0 <= twig_compare(twig_length_filter($this->env, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 43, $this->source); })())), 1)) {
            echo " ";
            // line 44
            echo "        <ul>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["clave"] => $context["especie"]) {
                // line 46
                echo "                <li>
                    Especie: ";
                // line 47
                echo twig_escape_filter($this->env, $context["clave"], "html", null, true);
                echo ",
                    Animal:
                    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["especie"]);
                foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                    // line 50
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["animal"], "html", null, true);
                    echo ",
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clave'], $context['especie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>
    ";
        }
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["especie"]) {
            // line 59
            echo "        <li>
            ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["especie"], 0, [], "any", false, false, false, 60), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
    ";
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            echo "       * ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
    ";
        // line 69
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 69, $this->source); })()), "Pajaros", [], "any", false, false, false, 69), 0, [], "any", false, false, false, 69)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "p") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            echo " ";
            // line 70
            echo "        <h1>Empieza por g</h1>
    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["especies_animales"]) || array_key_exists("especies_animales", $context) ? $context["especies_animales"] : (function () { throw new RuntimeError('Variable "especies_animales" does not exist.', 73, $this->source); })()), "Pajaros", [], "any", false, false, false, 73), 0, [], "any", false, false, false, 73)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "h") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) {
            echo " ";
            // line 74
            echo "        <h1>Termina por h</h1>
    ";
        }
        // line 76
        echo "
    <hr>

    ";
        // line 79
        echo twig_include($this->env, $context, "partials/funciones.html.twig", ["nombre" => "Adian Hoyos"]);
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/animales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 79,  273 => 76,  269 => 74,  266 => 73,  263 => 72,  259 => 70,  256 => 69,  253 => 68,  244 => 66,  239 => 65,  236 => 63,  227 => 60,  224 => 59,  219 => 58,  216 => 56,  212 => 54,  205 => 52,  196 => 50,  192 => 49,  187 => 47,  184 => 46,  180 => 45,  177 => 44,  173 => 43,  170 => 41,  166 => 39,  162 => 37,  159 => 36,  155 => 33,  153 => 32,  148 => 31,  143 => 28,  139 => 27,  136 => 26,  131 => 23,  128 => 22,  126 => 21,  123 => 20,  120 => 18,  118 => 13,  108 => 12,  96 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/master.html.twig' %}

{% block titulo %}
    Animal
{% endblock %}

{% block cabecera %}
    {{ parent() }} <!-- Con parent llamamos al contenido de la plantilla maestra -->
    <h1>{{ title }}</h1>
{% endblock %}

{% block contenido %}
    {# Esto es un comentario en twig
    <h1>{{ title }}</h1>
    <h2>Tu nombre es: {{ nombre }}</h2>
    <h3>Tus apellidos son: {{ apellidos }}</h3>
    #}

    {# Crear variables en twig #}

    {% set perro = 'Dobberman' %}

    <h4>{{ perro }}</h4>

    {# Trabajar con arrays #}
    <h3>Los animales son:</h3>
    {{ dump(animales) }} <!-- Con dump se impirmen los arrays en twig -->
    {{ animales[1] }} <!-- Asi se saca un elemento -->

    {# Trabajar con arrays asociativos #}
    {{ dump(especies_animales) }}
    {{ especies_animales.Perros.0 ~ ' ' ~ especies_animales.Perros.1 }}{# Asi se imprimen elementos en concreto, la ~ es para concatenar #}


    {# Condicionales #}
    {% if especies_animales.Perros.0 == 'dobberman' %}
        <h2>Si es un dobberman, cuidado</h2>
    {% else %}
        <h2>NO es un dobberman, rela</h2>
    {% endif %}

    {# Bucles #}
    {% if especies_animales|length >= 1 %} {# Esto es como hacer un count en PHP #}
        <ul>
            {% for clave, especie in especies_animales %}
                <li>
                    Especie: {{ clave }},
                    Animal:
                    {% for animal in especie %}
                        {{ animal }},
                    {% endfor %}
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {# Mismo pero mas reducido, solo saca el primer indice de cada uno #}
    {% for especie in especies_animales %}
        <li>
            {{ especie.0 }}
        </li>
    {% endfor %}

    {# Para sacar numeros #}
    {% for i in 0..10 %}
       * {{ i }}<br>
    {% endfor %}

    {% if especies_animales.Pajaros.0 starts with 'p' %} {# starts with, obviamente es por la condicion que nosotros queramos validar por la que comience #}
        <h1>Empieza por g</h1>
    {% endif %}

    {% if especies_animales.Pajaros.0 ends with 'h' %} {# ends with, obviamente es por la condicion que nosotros queramos validar por la que termine #}
        <h1>Termina por h</h1>
    {% endif %}

    <hr>

    {{ include('partials/funciones.html.twig', {'nombre': 'Adian Hoyos'}) }}


{% endblock %}", "home/animales.html.twig", "/opt/lampp/htdocs/web/Master_PHP/aprendiendo-symfony/templates/home/animales.html.twig");
    }
}
