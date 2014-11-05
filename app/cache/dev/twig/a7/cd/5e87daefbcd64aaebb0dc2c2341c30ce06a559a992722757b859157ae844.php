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
            'document_ready' => array($this, 'block_document_ready'),
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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\">          
          ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "            \$(document).ready(function() {
                    ";
        // line 17
        $this->displayBlock('document_ready', $context, $blocks);
        // line 18
        echo "                  });
         </script>
    </head>
    <body>
      <div class=\"container\">
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "      </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Basket Project ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 17
    public function block_document_ready($context, array $blocks = array())
    {
    }

    // line 23
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
        return array (  95 => 23,  90 => 17,  84 => 15,  78 => 7,  72 => 5,  65 => 24,  63 => 23,  56 => 18,  54 => 17,  51 => 16,  49 => 15,  40 => 9,  37 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
