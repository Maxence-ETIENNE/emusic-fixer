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

/* compte/index.html.twig */
class __TwigTemplate_6aa7d9084d6900b36721b3e54a78721d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

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

        yield "Compte index";
        
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
        yield "    <h1>Liste des comptes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Identifiant</th>
                <th>Role</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 19
            yield "            <tr>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "identifiant", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                ";
            // line 22
            if (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "roles", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "roles", [], "any", false, false, false, 22))) : ("")) == "[\"role_eleve\"]")) {
                // line 23
                yield "                    <td>Elève</td>
                ";
            } elseif (((((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["compte"], "roles", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "roles", [], "any", false, false, false, 24))) : ("")) == "[\"role_professeur\"]")) {
                // line 25
                yield "                    <td>Professeur</td>
                ";
            } elseif (((((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["compte"], "roles", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "roles", [], "any", false, false, false, 26))) : ("")) == "[\"role_gestionnaire\"]")) {
                // line 27
                yield "                    <td>Gestionnaire</td>
                ";
            }
            // line 29
            yield "                <td>
                    <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compte_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 33
        if (!$context['_iterated']) {
            // line 34
            yield "            <tr>
                <td colspan=\"5\">Aucun compte trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compte'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </tbody>
    </table>
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
        return "compte/index.html.twig";
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
        return array (  168 => 38,  159 => 34,  157 => 33,  149 => 30,  146 => 29,  142 => 27,  140 => 26,  137 => 25,  135 => 24,  132 => 23,  130 => 22,  126 => 21,  122 => 20,  119 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte index{% endblock %}

{% block body %}
    <h1>Liste des comptes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Identifiant</th>
                <th>Role</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                <td>{{ compte.id }}</td>
                <td>{{ compte.identifiant }}</td>
                {% if ((compte.roles ? compte.roles|json_encode : '') == '[\"role_eleve\"]') %}
                    <td>Elève</td>
                {% elseif ((compte.roles ? compte.roles|json_encode : '') == '[\"role_professeur\"]') %}
                    <td>Professeur</td>
                {% elseif ((compte.roles ? compte.roles|json_encode : '') == '[\"role_gestionnaire\"]') %}
                    <td>Gestionnaire</td>
                {% endif %}
                <td>
                    <a href=\"{{ path('app_compte_edit', {'id': compte.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucun compte trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "compte/index.html.twig", "D:\\wamp2024\\www\\emusic\\templates\\compte\\index.html.twig");
    }
}
