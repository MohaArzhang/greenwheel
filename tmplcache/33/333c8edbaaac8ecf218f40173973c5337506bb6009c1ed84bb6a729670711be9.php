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

/* register.html.twig */
class __TwigTemplate_959f9e7b1b1e0c70130cbcea26a3fa119ab2b228950472b43aabc533688fc666 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register
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
                echo "\t\t\t\t<li  class=\"errorFormat\">";
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
        echo "<div class=\"mx-auto\">
\t<div class=\"bodyLogin\">
\t\t<form method=\"POST\">
\t\t\t<label for=\"email\" class=\"titles\">Name</label>
\t\t\t<input name=\"name\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"address\" class=\"titles\">Address</label>
\t\t\t<input name=\"address\" type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "address", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"postcode\" class=\"titles\">Postal Code</label>
\t\t\t<input name=\"postcode\" type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "postcode", [], "any", false, false, false, 23), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"email\" class=\"titles\">Email</label>
\t\t\t<input name=\"email\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"pass\" class=\"titles\">Password</label>
\t\t\t<input name=\"pass\" type=\"password\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "pass", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"phone\" class=\"titles\">Phone</label>
\t\t\t<input name=\"phone\" type=\"text\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "phone", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<div class=\"correctButton\">
\t\t\t\t<button name=\"subscribe\" type=\"submit\" class=\"btn btn-secondary btn-sm correctWidth\">Subscribe</button>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  112 => 29,  106 => 26,  100 => 23,  94 => 20,  88 => 17,  82 => 13,  78 => 11,  69 => 9,  65 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Register
{% endblock %}
{% block content %}
\t{% if errorList %}
\t\t<ul>
\t\t\t{% for error in errorList %}
\t\t\t\t<li  class=\"errorFormat\">{{error}}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}
<div class=\"mx-auto\">
\t<div class=\"bodyLogin\">
\t\t<form method=\"POST\">
\t\t\t<label for=\"email\" class=\"titles\">Name</label>
\t\t\t<input name=\"name\" type=\"text\" value=\"{{v.name}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"address\" class=\"titles\">Address</label>
\t\t\t<input name=\"address\" type=\"text\" value=\"{{v.address}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"postcode\" class=\"titles\">Postal Code</label>
\t\t\t<input name=\"postcode\" type=\"text\" value=\"{{v.postcode}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"email\" class=\"titles\">Email</label>
\t\t\t<input name=\"email\" type=\"text\" value=\"{{v.email}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"pass\" class=\"titles\">Password</label>
\t\t\t<input name=\"pass\" type=\"password\" value=\"{{v.pass}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<label for=\"phone\" class=\"titles\">Phone</label>
\t\t\t<input name=\"phone\" type=\"text\" value=\"{{v.phone}}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\"><br>

\t\t\t<div class=\"correctButton\">
\t\t\t\t<button name=\"subscribe\" type=\"submit\" class=\"btn btn-secondary btn-sm correctWidth\">Subscribe</button>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
{% endblock content %}

", "register.html.twig", "C:\\xampp\\htdocs\\greenwheelproject\\templates\\register.html.twig");
    }
}
