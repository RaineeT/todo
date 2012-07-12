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
        $context["class"] = "user_login";
        // line 2
        $context["modal_header"] = "Login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_resources($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<form id=\"login\" class=\"form-horizontal\" action=\"auth/login\" method=\"POST\">
\t<dl class=\"dl-horizontal\">
\t\t<dt>Username:</dt>
\t\t<dd><input type=\"text\" class=\"input-small\" placeholder=\"Username:\" /></dd>
\t\t<p class=\"help-block\">Enter your Username</p>

\t\t<dt>Password:</dt>
\t\t<dd><input type=\"text\" class=\"input-small\" placeholder=\"Password:\" /></dd>
\t\t<p class=\"help-block\">Passwords are case sensitive</p>
\t</dl>
</form>

";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "\t<a href=\"#\" class=\"btn btn-primary\">Sign In</a>
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
        return array (  63 => 26,  60 => 25,  43 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
