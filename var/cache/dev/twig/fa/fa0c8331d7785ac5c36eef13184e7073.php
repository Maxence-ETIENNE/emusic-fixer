<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* cours/index.html.twig */
class __TwigTemplate_8c7b08b9b956e730d53d909b17a5018e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Cours index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Liste des cours</h1>
<h5>Si aucun cours ne vous convient, prenez un cours particulier.</h5>
    <a href=\"http://localhost/emusic/public/reserverCours\">Réserver</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>AgeMini</th>
                <th>AgeMaxi</th>
                <th>NbPlaces</th>
                <th>HeureDebut</th>
                <th>HeureFin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 23, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                // line 25
                yield "              <tr>
                <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "libelle", [], "any", false, false, false, 27), "html", null, true);
                yield "</td>
                <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMini", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMaxi", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "nbPlaces", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                <td>";
                // line 31
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 31), "H:i"), "html", null, true)) : (""));
                yield "</td>
                <td>";
                // line 32
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 32), "H:i"), "html", null, true)) : (""));
                yield "</td>
                <td>
                    <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\">Afficher</a>
                     | 
                    <a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\">Modifier</a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "          ";
        } else {
            // line 41
            yield "            <tr>
              <td colspan=\"8\">Aucun cours pour cet instrument</td>
            </tr>
          ";
        }
        // line 45
        yield "        </tbody>
    </table>
     <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_new");
        yield "\" class=\"btn btn-primary\">
        Créer un nouveau cours
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cours/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  186 => 47,  182 => 45,  176 => 41,  173 => 40,  163 => 36,  158 => 34,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  126 => 25,  121 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cours index{% endblock %}

{% block body %}
    <h1>Liste des cours</h1>
<h5>Si aucun cours ne vous convient, prenez un cours particulier.</h5>
    <a href=\"http://localhost/emusic/public/reserverCours\">Réserver</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>AgeMini</th>
                <th>AgeMaxi</th>
                <th>NbPlaces</th>
                <th>HeureDebut</th>
                <th>HeureFin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% if cours is not empty %}
            {% for cour in cours %}
              <tr>
                <td>{{ cour.id }}</td>
                <td>{{ cour.libelle }}</td>
                <td>{{ cour.ageMini }}</td>
                <td>{{ cour.ageMaxi }}</td>
                <td>{{ cour.nbPlaces }}</td>
                <td>{{ cour.heureDebut ? cour.heureDebut|date('H:i') : '' }}</td>
                <td>{{ cour.heureFin ? cour.heureFin|date('H:i') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_cours_show', {'id': cour.id}) }}\">Afficher</a>
                     | 
                    <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\">Modifier</a>
                </td>
              </tr>
            {% endfor %}
          {% else %}
            <tr>
              <td colspan=\"8\">Aucun cours pour cet instrument</td>
            </tr>
          {% endif %}
        </tbody>
    </table>
     <a href=\"{{ path('app_cours_new') }}\" class=\"btn btn-primary\">
        Créer un nouveau cours
    </a>
{% endblock %}
", "cours/index.html.twig", "D:\\wamp2024\\www\\emusic\\templates\\cours\\index.html.twig");
    }
}
