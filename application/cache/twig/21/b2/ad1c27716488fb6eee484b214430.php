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
        $context["class"] = "Auth_login_modal";
        // line 2
        $context["modal_header"] = "Member Login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_resources($context, array $blocks = array())
    {
        // line 6
        echo "\t\$(function(){
\t\t\$('#signin').click(function(){
\t\t\tvar name = \$('#name').val();
\t\t\tvar password = \$('#password').val();

\t\t\t\$.post('auth/login', { name: name, password: password });
\t\t});
\t});
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t<form id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "_form\" class=\"form-horizontal\" action=\"auth/login\" method=\"POST\">
\t\t<div class=\"control-group\">
\t\t\t<label for=\"name\" class=\"control-label\">Name</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" value=\"\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<label for=\"password\" class=\"control-label\">Password</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"text\" id=\"password\" name=\"password\" value=\"\"/>
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "\t<button id=\"signin\" class=\"btn btn-primary\" >Login</button>
\t<button class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
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
        return array (  73 => 34,  70 => 33,  50 => 17,  47 => 16,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
