<?php

/* auth/login.twig */
class __TwigTemplate_21b2ad1c27716488fb6eee484b214430 extends Twig_Template
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
        $context["class"] = "auth_login_modal";
        // line 2
        $context["modal_header"] = "Member Login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_resources($context, array $blocks = array())
    {
        // line 6
        echo "
\t\$(function() {
\t\t\$('#signin').on('click', function() {
\t\t\tvar username = \$('#username').val();
\t\t\tvar userpassword = \$('#userpassword').val();

\t\t\t\$.post(\t'auth/login',
\t\t\t\t{
\t\t\t\t\tusername : username,
\t\t\t\t\tuserpassword : userpassword,
\t\t\t\t},
\t\t\t\tfunction(data){
\t\t\t\t\talert(data);
\t\t\t\t\tif(data == 'FALSE')
\t\t\t\t\t{
\t\t\t\t\t\t\$('#errormsg').append('Invalid Login Credentials...  Try Again');
\t\t\t\t\t}
\t\t\t\t\telse if(data == 'TRUE')
\t\t\t\t\t{
\t\t\t\t\t\tdocument.location.href = 'home/';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t\tevent.preventDefault();
\t\t});
\t});

";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "\t<form id=\"login\" class=\"form-horizontal ";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "_form\" action=\"auth/login\" method=\"POST\">
\t\t<div class=\"control-group\">
\t\t\t<label for=\"username\" class=\"control-label\">Name</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"text\" id=\"username\" name=\"username\" value=\"\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"control-group\">
\t\t\t<label for=\"userpassword\" class=\"control-label\">Password</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"password\" id=\"userpassword\" name=\"userpassword\" value=\"\">
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "\t<button id=\"signin\" class=\"btn btn-primary submit_button\" data-dismiss=\"modal\">Log In</button>
\t<button class=\"btn btn-inverse\" data-dismiss=\"modal\">Cancel</button>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  90 => 53,  69 => 36,  66 => 35,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
