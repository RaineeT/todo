<?php

/* auth/register.twig */
class __TwigTemplate_ad5f9b33f0fbd11a88015364adbc7f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/modal.twig");

        $this->blocks = array(
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/modal.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = "auth_register_modal";
        // line 2
        $context["modal_header"] = "New Member Registration";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_resources($context, array $blocks = array())
    {
        // line 6
        echo "\t\$(function() {
\t\t\$('#signup').on('click', function() {
\t\t\tvar name = \$('#name').val();
\t\t\tvar password = \$('#password').val();
\t\t\tvar email = \$('#email').val();

\t\t\t\$.post(\t'../index.php/auth/register',
\t\t\t\t{
\t\t\t\t\tname : name,
\t\t\t\t\tpassword : password,
\t\t\t\t\temail : email,
\t\t\t\t}
\t\t\t);
\t\t\tevent.preventDefault();
\t\t});
\t});
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<form id=\"register\" class=\"form-horizontal ";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "_form\" action=\"auth/register\" method=\"POST\">
\t\t<div class=\"control-group\">
\t\t\t<label for=\"name\" class=\"control-label\">Name</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" value=\"\"/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"control-group\">
\t\t\t<label for=\"password\" class=\"control-label\">Password</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" value=\"\"/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"control-group\">
\t\t\t<label for=\"email\" class=\"control-label\">Email</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"\"/>
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "\t<button id=\"signup\" class=\"btn btn-primary submit_button\" data-dismiss=\"modal\">Register</button>
\t<button class=\"btn btn-inverse\" data-dismiss=\"modal\">Cancel</button>
";
    }

    public function getTemplateName()
    {
        return "auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 50,  86 => 49,  58 => 25,  55 => 24,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
