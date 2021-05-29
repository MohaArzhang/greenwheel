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

/* log_register_success.html.twig */
class __TwigTemplate_797741dc83508a5ead39ad03c290b28c8e9e4e3ec7dec630b38415dd410ce3ff extends \Twig\Template
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
        // line 1
        echo "<p>SUCCESSFULL HOOOOY</p>
<p>print_r(\$_SESSION['bikeUser']);</p>";
    }

    public function getTemplateName()
    {
        return "log_register_success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>SUCCESSFULL HOOOOY</p>
<p>print_r(\$_SESSION['bikeUser']);</p>", "log_register_success.html.twig", "C:\\xampp\\htdocs\\greenwheelproject\\templates\\log_register_success.html.twig");
    }
}
