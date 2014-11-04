<?php

/* ::layout.html.twig */
class __TwigTemplate_a7cd5e87daefbcd64aaebb0dc2c2341c30ce06a559a992722757b859157ae844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\">
          ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "         </script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Basket Project ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 12,  66 => 6,  60 => 5,  53 => 17,  51 => 16,  46 => 13,  44 => 12,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
