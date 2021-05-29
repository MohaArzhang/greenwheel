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

/* home.html.twig */
class __TwigTemplate_fabd2488210abf1b2f50e2e223d26e2f91d1302a600ceef0affabfcff489fd3e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'head' => [$this, 'block_head'],
            'hero' => [$this, 'block_hero'],
            'greensectiontitle' => [$this, 'block_greensectiontitle'],
            'greensection' => [$this, 'block_greensection'],
            'about' => [$this, 'block_about'],
            'bodytitle' => [$this, 'block_bodytitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "  - Bike Rental</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">
  <!-- CSS Files -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js\"></script>
    <!--link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" /-->
    
   ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "  ";
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
</head>
<body>
 
        
  <!-- Header -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex\">
      <div class=\"logo mr-auto\">
      </div>
    <span class=\"navbar-toggler-icon\"></span>
  </button>
      
    </div>
  </header>
";
        // line 35
        $this->displayBlock('hero', $context, $blocks);
        // line 36
        echo " 
<main id=\"main\">
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
      <div class=\"breadcrumb-hero\">
        <div class=\"container\">
          <div class=\"breadcrumb-hero\">
            ";
        // line 42
        $this->displayBlock('greensectiontitle', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('greensection', $context, $blocks);
        // line 44
        echo "          </div>
        </div>
      </div>
    </section>
";
        // line 48
        $this->displayBlock('about', $context, $blocks);
        // line 49
        echo "    <section id=\"services\" class=\"services  section-bg \">
      <div class=\"container\">
        <div class=\"section-title pt-5\">
          <h2>";
        // line 52
        $this->displayBlock('bodytitle', $context, $blocks);
        echo "</h2>
         </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"icon-box\">
              ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "              
            </div>
          </div>
      </div>
    </section>
</main>
  
<script language=\"JavaScript\">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            \$(\".image-tag\").val(data_uri);
            document.getElementById('results').innerHTML = '<img src=\"'+data_uri+'\"/>';
        } );
    }
</script>

</body>

</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 42
    public function block_greensectiontitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 43
    public function block_greensection($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 48
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_bodytitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "              
              ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 58,  207 => 57,  201 => 52,  195 => 48,  189 => 43,  183 => 42,  177 => 35,  171 => 19,  165 => 18,  159 => 8,  128 => 60,  126 => 57,  118 => 52,  113 => 49,  111 => 48,  105 => 44,  102 => 43,  100 => 42,  92 => 36,  90 => 35,  73 => 20,  70 => 19,  68 => 18,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %}{% endblock %}  - Bike Rental</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">
  <!-- CSS Files -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js\"></script>
    <!--link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" /-->
    
   {% block stylesheet %}{% endblock %}
  {% block head %}{% endblock %}

</head>
<body>
 
        
  <!-- Header -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex\">
      <div class=\"logo mr-auto\">
      </div>
    <span class=\"navbar-toggler-icon\"></span>
  </button>
      
    </div>
  </header>
{% block hero %}{% endblock %}
 
<main id=\"main\">
    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
      <div class=\"breadcrumb-hero\">
        <div class=\"container\">
          <div class=\"breadcrumb-hero\">
            {% block greensectiontitle %}{% endblock %}
            {% block greensection %}{% endblock %}
          </div>
        </div>
      </div>
    </section>
{% block about %}{% endblock %}
    <section id=\"services\" class=\"services  section-bg \">
      <div class=\"container\">
        <div class=\"section-title pt-5\">
          <h2>{% block bodytitle %}{% endblock %}</h2>
         </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"icon-box\">
              {% block body %}
              
              {% endblock %}
              
            </div>
          </div>
      </div>
    </section>
</main>
  
<script language=\"JavaScript\">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            \$(\".image-tag\").val(data_uri);
            document.getElementById('results').innerHTML = '<img src=\"'+data_uri+'\"/>';
        } );
    }
</script>

</body>

</html>", "home.html.twig", "C:\\xampp\\htdocs\\greenwheelproject\\templates\\home.html.twig");
    }
}
