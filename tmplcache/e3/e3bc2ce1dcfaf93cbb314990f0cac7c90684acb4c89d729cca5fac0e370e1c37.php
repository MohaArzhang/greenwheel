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

/* login.html.twig */
class __TwigTemplate_d11340fe9e958e9f68503b3c4751901d48a122d652f66cdbc672607c264c0e16 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
        if (($context["errorList"] ?? null)) {
            // line 7
            echo "\t\t<ul>
\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "\t\t\t\t<li class=\"errorFormat\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t</ul>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (($context["finalErrorList"] ?? null)) {
            // line 15
            echo "\t\t<ul>
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["finalErrorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "\t\t\t\t<li class=\"errorFormat\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</ul>
\t";
        }
        // line 21
        echo "\t<form method=\"POST\">
\t\t<div class=\"mb-3 bodyLogin\">
\t\t\t<label for=\"email\" class=\"titles\">Email address</label>
\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>
\t\t\t<label for=\"password\" class=\"titles\">Password</label>
\t\t\t<input name=\"pass\" type=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"emailHelp\"><br>
\t\t\t<div class=\"correctButton\">
\t\t\t\t<button type=\"submit\" name=\"btn_submit\" class=\"btn btn-secondary btn-sm correctWidth\">Login</button>
\t\t\t\t<a href='/registeration'><div class=\"btn btn-secondary btn-sm correctWidth\">Register</div></a>
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  103 => 19,  94 => 17,  90 => 16,  87 => 15,  85 => 14,  82 => 13,  78 => 11,  69 => 9,  65 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login
{% endblock %}
{% block content %}
\t{% if errorList %}
\t\t<ul>
\t\t\t{% for error in errorList %}
\t\t\t\t<li class=\"errorFormat\">{{error}}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}

\t{% if finalErrorList %}
\t\t<ul>
\t\t\t{% for error in finalErrorList %}
\t\t\t\t<li class=\"errorFormat\">{{error}}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}
\t<form method=\"POST\">
\t\t<div class=\"mb-3 bodyLogin\">
\t\t\t<label for=\"email\" class=\"titles\">Email address</label>
\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>
\t\t\t<label for=\"password\" class=\"titles\">Password</label>
\t\t\t<input name=\"pass\" type=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"emailHelp\"><br>
\t\t\t<div class=\"correctButton\">
\t\t\t\t<button type=\"submit\" name=\"btn_submit\" class=\"btn btn-secondary btn-sm correctWidth\">Login</button>
\t\t\t\t<a href='/registeration'><div class=\"btn btn-secondary btn-sm correctWidth\">Register</div></a>
\t\t\t</div>
\t\t</div>
\t</form>
{% endblock content %}", "login.html.twig", "C:\\xampp\\htdocs\\greenwheelproject\\templates\\login.html.twig");
    }
}
