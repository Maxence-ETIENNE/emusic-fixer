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

/* intervention/show.html.twig */
class __TwigTemplate_0b03a8f3e26cabd139103c17c133631b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/show.html.twig"));

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

        yield "Intervention";
        
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
        yield "    <h1>Intervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 16, $this->source); })()), "dateDebut", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 16, $this->source); })()), "dateDebut", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>";
        // line 20
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 20, $this->source); })()), "dateFin", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 20, $this->source); })()), "dateFin", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Descriptif</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 24, $this->source); })()), "descriptif", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Quotite</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 32, $this->source); })()), "quotite", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Professionnel</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 36, $this->source); })()), "professionnel", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intervention_index");
        yield "\">Retour à la liste</a>

    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intervention_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">Modifier</a>

    ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "intervention/_delete_form.html.twig");
        yield "
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
        return "intervention/show.html.twig";
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
        return array (  168 => 45,  163 => 43,  158 => 41,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intervention{% endblock %}

{% block body %}
    <h1>Intervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ intervention.id }}</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>{{ intervention.dateDebut ? intervention.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>{{ intervention.dateFin ? intervention.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Descriptif</th>
                <td>{{ intervention.descriptif }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ intervention.prix }}</td>
            </tr>
            <tr>
                <th>Quotite</th>
                <td>{{ intervention.quotite }}</td>
            </tr>
            <tr>
                <th>Professionnel</th>
                <td>{{ intervention.professionnel }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_intervention_index') }}\">Retour à la liste</a>

    <a href=\"{{ path('app_intervention_edit', {'id': intervention.id}) }}\">Modifier</a>

    {{ include('intervention/_delete_form.html.twig') }}
{% endblock %}
", "intervention/show.html.twig", "D:\\wamp2024\\www\\emusic\\templates\\intervention\\show.html.twig");
    }
}
