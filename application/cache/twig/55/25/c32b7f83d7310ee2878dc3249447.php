<?php

/* templates/modal.twig */
class __TwigTemplate_5525c32b7f83d7310ee2878dc3249447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'onload' => array($this, 'block_onload'),
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
\t\$(function(){
\t\t";
        // line 3
        $this->displayBlock('onload', $context, $blocks);
        // line 4
        echo "\t});

\t";
        // line 6
        $this->displayBlock('resources', $context, $blocks);
        // line 7
        echo "</script>
<div class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo " modal hide loaded_modal\">
\t";
        // line 9
        if ((array_key_exists("modal_header", $context) && ($this->getContext($context, "modal_header") != ""))) {
            // line 10
            echo "\t\t<div class=\"modal-header\">
\t\t\t<h2> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "modal_header"), "html", null, true);
            echo " </h2>
\t\t</div>
\t";
        }
        // line 14
        echo "\t<div class=\"modal-body\">
\t\t<div class=\"span6\">
\t\t\t";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "\t\t</div>
\t</div>
\t<div class=\"modal-footer\">
\t\t";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "\t</div>
</div>";
    }

    // line 3
    public function block_onload($context, array $blocks = array())
    {
    }

    // line 6
    public function block_resources($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
\t\t\t";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "templates/modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  87 => 22,  74 => 6,  69 => 3,  64 => 25,  62 => 22,  57 => 19,  51 => 14,  45 => 11,  42 => 10,  40 => 9,  36 => 8,  33 => 7,  31 => 6,  21 => 1,  82 => 17,  79 => 16,  58 => 25,  55 => 16,  35 => 6,  32 => 5,  27 => 4,  25 => 3,);
    }
}
