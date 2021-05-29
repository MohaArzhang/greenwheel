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

/* edit_account.html.twig */
class __TwigTemplate_ff9f2082f85b5dbe7a996d9a6d4c22457dd800f181e61492c7ecd808bcb4d3eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodytitle' => [$this, 'block_bodytitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("home.html.twig", "edit_account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Account Edit Page ";
    }

    // line 3
    public function block_bodytitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit User Account";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t<section class=\"container\">
\t\t<form method=\"post\">
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"name\">name</label>
\t\t\t\t\t<input type=\"text\" ";
        // line 12
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["errorList"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " class=\"classform1\" id=\"name\" name=\"name\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user1"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 14
        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["errorList"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null)) {
            // line 15
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["errorList"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"address\">address</address></label>
\t\t\t\t\t<input type=\"text\" ";
        // line 21
        if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["errorList"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["address"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " name=\"address\" id=\"address\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 23
        if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["errorList"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["address"] ?? null) : null)) {
            // line 24
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["errorList"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["address"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"postalCode\">Postal Code</label>
\t\t\t\t\t<input type=\"text\" ";
        // line 30
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["errorList"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["postalCode"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " id=\"postalCode\" name=\"postalCode\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "postalCode", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 32
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["errorList"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["postalCode"] ?? null) : null)) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["errorList"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["postalCode"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"phone\">Phone Number</label>
\t\t\t\t\t<input type=\"text\" ";
        // line 39
        if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["errorList"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["phone"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " id=\"phone\" name=\"phone\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 41
        if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["errorList"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["phone"] ?? null) : null)) {
            // line 42
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["errorList"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["phone"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t<input type=\"email\" ";
        // line 50
        if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["errorList"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["email"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " name=\"email\" id=\"email\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 52
        if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["errorList"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["email"] ?? null) : null)) {
            // line 53
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["errorList"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["email"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"username\">UserName</label>
\t\t\t\t\t<input type=\"text\" ";
        // line 60
        if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["errorList"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["username"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " id=\"username\" name=\"username\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 60), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 62
        if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["errorList"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["username"] ?? null) : null)) {
            // line 63
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["errorList"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["username"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t<input type=\"password\" ";
        // line 69
        if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["errorList"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["password"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " id=\"password1\" name=\"password1\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password1", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 71
        if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["errorList"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["password"] ?? null) : null)) {
            // line 72
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["errorList"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["password"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"password\">Retry-Password</label>
\t\t\t\t\t<input type=\"password\" ";
        // line 78
        if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["errorList"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["password"] ?? null) : null)) {
            echo " class=\"classform1\" ";
        } else {
            echo " class=\"form-control\" ";
        }
        echo " id=\"password2\" name=\"password2\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password2", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t";
        // line 80
        if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["errorList"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["password"] ?? null) : null)) {
            // line 81
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["errorList"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["password"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br/>
\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg btn-block\" style=\"background: #a6ca63;\">Save </button>
\t\t</form>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "edit_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 83,  265 => 81,  263 => 80,  252 => 78,  246 => 74,  240 => 72,  238 => 71,  227 => 69,  221 => 65,  215 => 63,  213 => 62,  202 => 60,  195 => 55,  189 => 53,  187 => 52,  176 => 50,  168 => 44,  162 => 42,  160 => 41,  149 => 39,  143 => 35,  137 => 33,  135 => 32,  124 => 30,  118 => 26,  112 => 24,  110 => 23,  99 => 21,  93 => 17,  87 => 15,  85 => 14,  74 => 12,  66 => 6,  62 => 5,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"home.html.twig\" %}
{% block title %}Account Edit Page {% endblock %}
{% block bodytitle %}Edit User Account{% endblock %}

{% block body %}

\t<section class=\"container\">
\t\t<form method=\"post\">
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"name\">name</label>
\t\t\t\t\t<input type=\"text\" {% if(errorList['name']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} class=\"classform1\" id=\"name\" name=\"name\" value=\"{{ user1.name }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['name']) %}
\t\t\t\t\t\t\t{{errorList['name']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"address\">address</address></label>
\t\t\t\t\t<input type=\"text\" {% if(errorList['address']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} name=\"address\" id=\"address\" value=\"{{ user.address }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['address']) %}
\t\t\t\t\t\t\t{{errorList['address']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"postalCode\">Postal Code</label>
\t\t\t\t\t<input type=\"text\" {% if(errorList['postalCode']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} id=\"postalCode\" name=\"postalCode\" value=\"{{ user.postalCode }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['postalCode']) %}
\t\t\t\t\t\t\t{{errorList['postalCode']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"phone\">Phone Number</label>
\t\t\t\t\t<input type=\"text\" {% if(errorList['phone']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} id=\"phone\" name=\"phone\" value=\"{{ user.phone }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['phone']) %}
\t\t\t\t\t\t\t{{errorList['phone']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t<input type=\"email\" {% if(errorList['email']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} name=\"email\" id=\"email\" value=\"{{ user.email }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['email']) %}
\t\t\t\t\t\t\t{{errorList['email']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"username\">UserName</label>
\t\t\t\t\t<input type=\"text\" {% if(errorList['username']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} id=\"username\" name=\"username\" value=\"{{ user.username }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['username']) %}
\t\t\t\t\t\t\t{{errorList['username']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t<input type=\"password\" {% if(errorList['password']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} id=\"password1\" name=\"password1\" value=\"{{ user.password1 }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['password']) %}
\t\t\t\t\t\t\t{{errorList['password']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"password\">Retry-Password</label>
\t\t\t\t\t<input type=\"password\" {% if(errorList['password']) %} class=\"classform1\" {% else %} class=\"form-control\" {% endif %} id=\"password2\" name=\"password2\" value=\"{{ user.password2 }}\">
\t\t\t\t\t<div class=\"errorclassform1\">
\t\t\t\t\t\t{% if(errorList['password']) %}
\t\t\t\t\t\t\t{{errorList['password']}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br/>
\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg btn-block\" style=\"background: #a6ca63;\">Save </button>
\t\t</form>
\t</section>

{% endblock %}
", "edit_account.html.twig", "C:\\xampp\\htdocs\\greenwheelproject\\templates\\edit_account.html.twig");
    }
}
