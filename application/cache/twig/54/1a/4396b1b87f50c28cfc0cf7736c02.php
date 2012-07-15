<?php

/* auth/index.twig */
class __TwigTemplate_541a4396b1b87f50c28cfc0cf7736c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/default.twig");

        $this->blocks = array(
            'onload' => array($this, 'block_onload'),
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["title"] = "Welcome";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_onload($context, array $blocks = array())
    {
        // line 5
        echo "\t
";
    }

    // line 8
    public function block_resources($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"span8 offset4\">
\t\t<h1>Welcome to ToDo.com</h1>

\t\t<a href=\"auth/login\" class=\"btn btn-primary launch_modal\">Login</a>
\t\t<a href=\"auth/register\" class=\"btn btn-inverse launch_modal\">Register</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "auth/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 4,  25 => 1,);
    }
}
