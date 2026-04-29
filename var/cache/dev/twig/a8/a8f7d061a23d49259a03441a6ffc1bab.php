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

/* intervention/index.html.twig */
class __TwigTemplate_cf9748c4bda39415096f7fb1fd360717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/index.html.twig"));

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

        yield "Intervention index";
        
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
        yield "<style>
.custom-btn-lg {
    background: linear-gradient(135deg, #0d6efd, #084298);
    padding: 14px 28px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 12px;
    transition: 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    border: none;
}

.custom-btn-lg:hover {
    background: linear-gradient(135deg, #0d6efd, #084298);
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.20);
}

</style>
    <center><h1>Lister les interventions</h1></center>
    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intervention_new");
        yield "\" class=\"btn btn-primary custom-btn-lg\">
    Créer une nouvelle intervention
    </a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Descriptif</th>
                <th>Prix</th>
                <th>Quotite</th>
                <th>Professionnel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 44
            yield "            <tr>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td>";
            // line 46
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "dateDebut", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "dateDebut", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "dateFin", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "dateFin", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "descriptif", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "prix", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "quotite", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "professionnel", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>


                <td>
                    <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intervention_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\">Afficher</a>
                     | 
                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intervention_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 60
        if (!$context['_iterated']) {
            // line 61
            yield "            <tr>
                <td colspan=\"8\">Aucune intervention trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['intervention'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "intervention/index.html.twig";
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
        return array (  205 => 65,  196 => 61,  194 => 60,  186 => 57,  181 => 55,  174 => 51,  170 => 50,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  147 => 44,  142 => 43,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intervention index{% endblock %}

{% block body %}
<style>
.custom-btn-lg {
    background: linear-gradient(135deg, #0d6efd, #084298);
    padding: 14px 28px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 12px;
    transition: 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    border: none;
}

.custom-btn-lg:hover {
    background: linear-gradient(135deg, #0d6efd, #084298);
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.20);
}

</style>
    <center><h1>Lister les interventions</h1></center>
    <a href=\"{{ path('app_intervention_new') }}\" class=\"btn btn-primary custom-btn-lg\">
    Créer une nouvelle intervention
    </a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Descriptif</th>
                <th>Prix</th>
                <th>Quotite</th>
                <th>Professionnel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for intervention in interventions %}
            <tr>
                <td>{{ intervention.id }}</td>
                <td>{{ intervention.dateDebut ? intervention.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ intervention.dateFin ? intervention.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ intervention.descriptif }}</td>
                <td>{{ intervention.prix }}</td>
                <td>{{ intervention.quotite }}</td>
                <td>{{ intervention.professionnel }}</td>


                <td>
                    <a href=\"{{ path('app_intervention_show', {'id': intervention.id}) }}\">Afficher</a>
                     | 
                    <a href=\"{{ path('app_intervention_edit', {'id': intervention.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucune intervention trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "intervention/index.html.twig", "D:\\wamp2024\\www\\emusic\\templates\\intervention\\index.html.twig");
    }
}
