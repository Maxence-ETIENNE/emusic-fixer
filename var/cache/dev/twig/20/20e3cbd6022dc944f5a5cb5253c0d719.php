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

/* accueil/index.html.twig */
class __TwigTemplate_ab4b3f2d77c0652ee9c3e70bf83d95c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

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
        yield "<style>
/* --- ton CSS existant, inchangé --- */
.tables-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 20px;
}
.table-box {
  flex: 1 1 calc(50% - 20px);
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  padding: 15px;
  box-sizing: border-box;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.table-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
.table-box h4 {
  text-align: center;
  margin-bottom: 10px;
  color: #333;
  font-size: 1.2em;
}
.table {
  width: 100%;
  border-collapse: collapse;
}
.table th {
  background-color: #007BFF;
  color: white;
  padding: 8px;
  text-align: left;
  font-weight: normal;
}
.table td {
  border-bottom: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}
.table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}
.table a {
  color: #007BFF;
  text-decoration: none;
  margin-right: 5px;
}
.table a:hover {
  text-decoration: underline;
}
@media (max-width: 768px) {
  .table-box {
    flex: 1 1 100%;
  }
}
</style>

<center><h1>Bienvenue sur EMusic — Cours disponibles</h1>

<form method=\"get\" action=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil_index");
        yield "\">
    <input type=\"text\" name=\"instrument\" placeholder=\"Rechercher un instrument\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchInstrument", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchInstrument"]) || array_key_exists("searchInstrument", $context) ? $context["searchInstrument"] : (function () { throw new RuntimeError('Variable "searchInstrument" does not exist.', 72, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
    <button type=\"submit\">Rechercher</button>
</form></center>

<!-- <div class=\"tables-container\" style=\"display:flex; flex-wrap:wrap; gap:20px; padding:20px;\">
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coursParInstrument"]) || array_key_exists("coursParInstrument", $context) ? $context["coursParInstrument"] : (function () { throw new RuntimeError('Variable "coursParInstrument" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["instrument"] => $context["cours"]) {
            // line 78
            yield "        <div class=\"table-box\" style=\"flex:1 1 calc(50% - 20px); background:#f9f9f9; border:1px solid #ddd; border-radius:10px; padding:15px; box-sizing:border-box;\">
            <h4 style=\"text-align:center;\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["instrument"], "html", null, true);
            yield "</h4>
            <table style=\"width:100%; border-collapse:collapse;\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libelle</th>
                        <th>AgeMini</th>
                        <th>AgeMaxi</th>
                        <th>NbPlaces</th>
                        <th>HeureDebut</th>
                        <th>HeureFin</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 93
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["cours"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["cours"]);
                foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                    // line 95
                    yield "                            <tr>
                                <td>";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 96), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "libelle", [], "any", false, false, false, 97), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMini", [], "any", false, false, false, 98), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMaxi", [], "any", false, false, false, 99), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "nbPlaces", [], "any", false, false, false, 100), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 101
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 101), "H:i"), "html", null, true)) : (""));
                    yield "</td>
                                <td>";
                    // line 102
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 102), "H:i"), "html", null, true)) : (""));
                    yield "</td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                yield "                    ";
            } else {
                // line 106
                yield "                        <tr>
                            <td colspan=\"7\">Aucun cours pour cet instrument</td>
                        </tr>
                    ";
            }
            // line 110
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['instrument'], $context['cours'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield " -->
<div class=\"tables-container\">
  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coursParInstrument"]) || array_key_exists("coursParInstrument", $context) ? $context["coursParInstrument"] : (function () { throw new RuntimeError('Variable "coursParInstrument" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["instrument"] => $context["cours"]) {
            // line 116
            yield "    <div class=\"table-box\">
      <h4>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["instrument"], "html", null, true);
            yield "</h4>
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
            // line 132
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["cours"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["cours"]);
                foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                    // line 134
                    yield "              <tr>
                <td>";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 135), "html", null, true);
                    yield "</td>
                <td>";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "libelle", [], "any", false, false, false, 136), "html", null, true);
                    yield "</td>
                <td>";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMini", [], "any", false, false, false, 137), "html", null, true);
                    yield "</td>
                <td>";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ageMaxi", [], "any", false, false, false, 138), "html", null, true);
                    yield "</td>
                <td>";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "nbPlaces", [], "any", false, false, false, 139), "html", null, true);
                    yield "</td>
                <td>";
                    // line 140
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureDebut", [], "any", false, false, false, 140), "H:i"), "html", null, true)) : (""));
                    yield "</td>
                <td>";
                    // line 141
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "heureFin", [], "any", false, false, false, 141), "H:i"), "html", null, true)) : (""));
                    yield "</td>
                <td>
                    <a href=\"";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                    yield "\">Afficher</a>
                    
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                yield "          ";
            } else {
                // line 149
                yield "            <tr>
              <td colspan=\"8\">Aucun cours pour cet instrument</td>
            </tr>
          ";
            }
            // line 153
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['instrument'], $context['cours'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "</div>
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
        return "accueil/index.html.twig";
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
        return array (  361 => 157,  352 => 153,  346 => 149,  343 => 148,  332 => 143,  327 => 141,  323 => 140,  319 => 139,  315 => 138,  311 => 137,  307 => 136,  303 => 135,  300 => 134,  295 => 133,  293 => 132,  275 => 117,  272 => 116,  268 => 115,  264 => 113,  255 => 110,  249 => 106,  246 => 105,  237 => 102,  233 => 101,  229 => 100,  225 => 99,  221 => 98,  217 => 97,  213 => 96,  210 => 95,  205 => 94,  203 => 93,  186 => 79,  183 => 78,  179 => 77,  171 => 72,  167 => 71,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cours index{% endblock %}

{% block body %}
<style>
/* --- ton CSS existant, inchangé --- */
.tables-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 20px;
}
.table-box {
  flex: 1 1 calc(50% - 20px);
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  padding: 15px;
  box-sizing: border-box;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.table-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
.table-box h4 {
  text-align: center;
  margin-bottom: 10px;
  color: #333;
  font-size: 1.2em;
}
.table {
  width: 100%;
  border-collapse: collapse;
}
.table th {
  background-color: #007BFF;
  color: white;
  padding: 8px;
  text-align: left;
  font-weight: normal;
}
.table td {
  border-bottom: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}
.table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}
.table a {
  color: #007BFF;
  text-decoration: none;
  margin-right: 5px;
}
.table a:hover {
  text-decoration: underline;
}
@media (max-width: 768px) {
  .table-box {
    flex: 1 1 100%;
  }
}
</style>

<center><h1>Bienvenue sur EMusic — Cours disponibles</h1>

<form method=\"get\" action=\"{{ path('app_accueil_index') }}\">
    <input type=\"text\" name=\"instrument\" placeholder=\"Rechercher un instrument\" value=\"{{ searchInstrument|default('') }}\">
    <button type=\"submit\">Rechercher</button>
</form></center>

<!-- <div class=\"tables-container\" style=\"display:flex; flex-wrap:wrap; gap:20px; padding:20px;\">
    {% for instrument, cours in coursParInstrument %}
        <div class=\"table-box\" style=\"flex:1 1 calc(50% - 20px); background:#f9f9f9; border:1px solid #ddd; border-radius:10px; padding:15px; box-sizing:border-box;\">
            <h4 style=\"text-align:center;\">{{ instrument }}</h4>
            <table style=\"width:100%; border-collapse:collapse;\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libelle</th>
                        <th>AgeMini</th>
                        <th>AgeMaxi</th>
                        <th>NbPlaces</th>
                        <th>HeureDebut</th>
                        <th>HeureFin</th>
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
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"7\">Aucun cours pour cet instrument</td>
                        </tr>
                    {% endif %}
                </tbody>
            </table>
        </div>
    {% endfor %} -->
<div class=\"tables-container\">
  {% for instrument, cours in coursParInstrument %}
    <div class=\"table-box\">
      <h4>{{ instrument }}</h4>
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
    </div>
  {% endfor %}
</div>
{% endblock %}", "accueil/index.html.twig", "D:\\wamp2024\\www\\emusic\\templates\\accueil\\index.html.twig");
    }
}
