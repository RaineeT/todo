<?php

/* register/signup.twig */
class __TwigTemplate_070fe2441d9a62e94c59d908ed988416 extends Twig_Template
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
        $context["class"] = "Register_signup_modal";
        // line 2
        $context["modal_header"] = "Singup Page";
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
        echo "_form\" class=\"form-horizontal\" action=\"register/signup\" method=\"POST\">
\t<h1>Im a modal</h1>
</form>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "<button class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
<button class=\"btn btn-primary\" data-dismiss=\"modal\">Register</button>
<!-- <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
<a href=\"#\" class=\"btn btn-primary\">Sign In</a> -->
";
    }

    public function getTemplateName()
    {
        return "register/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  52 => 15,  43 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }
}
