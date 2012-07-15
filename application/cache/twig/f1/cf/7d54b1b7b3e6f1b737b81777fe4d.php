<?php

/* login/signin.twig */
class __TwigTemplate_f1cf7d54b1b7b3e6f1b737b81777fe4d extends Twig_Template
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
        $context["class"] = "Login_signin_modal";
        // line 2
        $context["modal_header"] = "Login Page";
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
        echo "<form id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "_form\" class=\"form-horizontal\" action=\"login/signin\" method=\"POST\">
\t<table class=\"table table-striped table-condensed\">
\t\t<thead></thead>
\t</table>
</form>
";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "<button class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
<button class=\"btn btn-primary\" data-dismiss=\"modal\">Login</button>
";
    }

    public function getTemplateName()
    {
        return "login/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  43 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
