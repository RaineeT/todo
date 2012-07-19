<?php

/* home/index.twig */
class __TwigTemplate_3a1ecfe38e05f38493a62e1261583afa extends Twig_Template
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
        $context["title"] = "Home";
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
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span4 well\">
\t\t\t\t<form id=\"list\" class=\"form-horizontal pull-left\" action=\"\" method=\"post\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>Add New Item</legend>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"title\">Title</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-large\" name=\"title\" id=\"title\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Enter a title</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"description\">Description</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<textarea class=\"input-large\" id=\"textarea\" rows=\"6\"></textarea>
\t\t\t\t\t\t\t\t<p class=\"help-block\">Please provide a short description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"due\">Date Due</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-large\" name=\"due\" id=\"due\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Enter a Due Date</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"url\">URL</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-large\" name=\"url\" id=\"url\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Enter the url</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"image\">Image</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-large\" name=\"image\" id=\"Image\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Submit an image</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post Item<span> </span><i class=\"icon-thumbs-up icon-white\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"span8 well\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Prev</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
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
