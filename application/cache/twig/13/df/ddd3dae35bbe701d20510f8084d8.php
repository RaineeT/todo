<?php

/* templates/default.twig */
class __TwigTemplate_13dfddd3dae35bbe701d20510f8084d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
\t<head>
\t\t<meta http-equiv='Content-type' content='text/html; charset=UTF-8' />
\t\t<meta http-equiv='Content-Language' content='en-us' />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo " </title>
\t\t<meta name='keywords' content='";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "meta_keywords"), "html", null, true);
        echo "' />
\t\t<meta name='description' content='";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "meta_description"), "html", null, true);
        echo "' />
\t\t<meta name='copyright' content='";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "meta_copywrite"), "html", null, true);
        echo "' />
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "styles"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 13
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "style"), "html", null, true);
            echo "\" type=\"text/css\">
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/bootstrap.css\" type=\"text/css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/bootstrap-responsive.css\" type=\"text/css\">
\t</head>

\t<body>
\t\t<div id='container'>
\t\t\t<div class=\"navbar navbar-fixed-top\">
\t\t\t\t<div class=\"navbar-inner\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"></a>
\t\t\t\t\t\t<a class=\"brand\" href=\"#\">ToDo.com</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br /><br /><br />
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<footer>
\t\t\t\t\t<p>&#169; ToDo.com, LLC 2012</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>

\t\t<script type=\"text/javascript\" src=\"../../assets/js/libs/jquery-1.7.2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../../assets/js/libs/jquery-ui-1.8.16.custom.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../../assets/js/libs/bootstrap/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../../assets/js/plugins.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../../assets/js/script.js\"></script>
\t\t<script>
\t\t\tfunction onfinalload () {

\t\t\t}
\t\t\t\$(document).ready(function () {
\t\t\t\tdomModal = \$('#modal-from-dom');

\t\t\t\t\$('#btnPrimary').live('click', function(){
\t\t\t\t\talert('btnPrimary clicked!');
\t\t\t\t\tdomModal.modal('hide');
\t\t\t\t});

\t\t\t\t\$('#btnSecondary').live('click', function(){
\t\t\t\t\talert('btnSecondary clicked!');
\t\t\t\t\tdomModal.modal('hide');
\t\t\t\t});

\t\t\t\t//Removes the close 'x'
\t\t\t\t\$('.close', \$('#modal-from-dom')).remove();
\t\t\t});
\t\t</script>
\t</body>
</html>";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "
\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "templates/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  119 => 34,  79 => 37,  77 => 34,  56 => 15,  47 => 13,  43 => 12,  39 => 11,  35 => 10,  31 => 9,  27 => 8,  18 => 1,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 4,  25 => 1,);
    }
}
