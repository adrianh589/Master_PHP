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

/* task/detail.html.twig */
class __TwigTemplate_2baf462062714835bad3b8ebe425381d56d00c6243bf38a6f5e4e1d07ed05e9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Todas las tareas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"example-wrapper\">
        <h2> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " ✅</h2>

        <p class=\"data-task\">
            ";
        // line 11
        echo twig_escape_filter($this->env, ((("Tarea creada por: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "surname", [], "any", false, false, false, 11)), "html", null, true);
        echo "
            <br>
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 13, $this->source); })()), "createdAt", [], "any", false, false, false, 13), "d/m/Y H:i"), "html", null, true);
        echo "
            <br>
            ";
        // line 15
        $context["prioridad"] = twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 15, $this->source); })()), "priority", [], "any", false, false, false, 15);
        // line 16
        echo "            ";
        echo ((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "high")) ? ("Alta") : (((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "medium")) ? ("medio") : (((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "low")) ? ("bajo") : (""))))));
        echo "
        </p>

        <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>

        ";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["task_user"]) || array_key_exists("task_user", $context) ? $context["task_user"] : (function () { throw new RuntimeError('Variable "task_user" does not exist.', 21, $this->source); })()));
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  117 => 19,  110 => 16,  108 => 15,  103 => 13,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Todas las tareas{% endblock %}

{% block body %}

    <div class=\"example-wrapper\">
        <h2> {{ task_user.title }} ✅</h2>

        <p class=\"data-task\">
            {{ 'Tarea creada por: ' ~ task_user.user.name ~ ' ' ~ task_user.user.surname }}
            <br>
            {{ task_user.createdAt|date('d/m/Y H:i') }}
            <br>
            {% set prioridad = task_user.priority %}
            {{ prioridad == 'high' ? 'Alta' : prioridad == 'medium' ? 'medio' : prioridad == 'low' ? 'bajo' }}
        </p>

        <p>{{ task_user.content }}</p>

        {{ dump(task_user) }}

    </div>
{% endblock %}
", "task/detail.html.twig", "/opt/lampp/htdocs/web/Master_PHP/proyecto-symfony/templates/task/detail.html.twig");
    }
}
