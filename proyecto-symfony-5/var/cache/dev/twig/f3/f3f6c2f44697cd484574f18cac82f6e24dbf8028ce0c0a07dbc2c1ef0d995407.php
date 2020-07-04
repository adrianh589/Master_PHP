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

/* includes/task-list.html.twig */
class __TwigTemplate_f86f3aad8a9e108e82d21e9c7b5cd4f0cfc6f8d58a3dd5d758c7907b0b9f20d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/task-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/task-list.html.twig"));

        // line 1
        if (0 !== twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 1, $this->source); })())), 0)) {
            // line 2
            echo "
    <table>
        <tr>
            <th>Tarea</th>
            <th>Prioridad</th>
            <th>Horas</th>
            <th>Acciones</th>
        </tr>


        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 13
                echo "            <tr>
                <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
                ";
                // line 15
                $context["prioridad"] = twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 15);
                // line 16
                echo "                ";
                $context["traduccion"] = ((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "high")) ? ("Alta") : (((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "medium")) ? ("medio") : (((0 === twig_compare((isset($context["prioridad"]) || array_key_exists("prioridad", $context) ? $context["prioridad"] : (function () { throw new RuntimeError('Variable "prioridad" does not exist.', 16, $this->source); })()), "low")) ? ("bajo") : (""))))));
                // line 17
                echo "                <td>";
                echo twig_escape_filter($this->env, (isset($context["traduccion"]) || array_key_exists("traduccion", $context) ? $context["traduccion"] : (function () { throw new RuntimeError('Variable "traduccion" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "hours", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                <td class=\"buttons\">
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">Ver</a>
                    ";
                // line 21
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), null) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)))) {
                    // line 22
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\" class=\"edit\">Editar</a>
                        <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\" class=\"delete\">Eliminar</a>
                    ";
                }
                // line 25
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
    </table>

";
        } else {
            // line 32
            echo "    <strong>No hay tareas disponibles en este momento</strong>
";
        }
        // line 34
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  107 => 28,  99 => 25,  94 => 23,  89 => 22,  87 => 21,  83 => 20,  78 => 18,  73 => 17,  70 => 16,  68 => 15,  64 => 14,  61 => 13,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if tasks|length != 0 %}

    <table>
        <tr>
            <th>Tarea</th>
            <th>Prioridad</th>
            <th>Horas</th>
            <th>Acciones</th>
        </tr>


        {% for task in tasks %}
            <tr>
                <td>{{ task.title }}</td>
                {% set prioridad = task.priority %}
                {% set traduccion = prioridad == 'high' ? 'Alta' : prioridad == 'medium' ? 'medio' : prioridad == 'low' ? 'bajo' %}
                <td>{{ traduccion }}</td>
                <td>{{ task.hours }}</td>
                <td class=\"buttons\">
                    <a href=\"{{ path('task_detail', {id: task.id} ) }}\">Ver</a>
                    {% if app.user != null and app.user.id == task.user.id %}
                        <a href=\"{{ path('task_edit', {id: task.id}) }}\" class=\"edit\">Editar</a>
                        <a href=\"{{ path('task_delete', {id: task.id}) }}\" class=\"delete\">Eliminar</a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}

    </table>

{% else %}
    <strong>No hay tareas disponibles en este momento</strong>
{% endif %}

", "includes/task-list.html.twig", "/opt/lampp/htdocs/web/Master_PHP/proyecto-symfony/templates/includes/task-list.html.twig");
    }
}
