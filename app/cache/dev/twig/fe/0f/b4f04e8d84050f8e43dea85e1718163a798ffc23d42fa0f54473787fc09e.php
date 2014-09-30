<?php

/* ::base.html.twig */
class __TwigTemplate_fe0fb4f04e8d84050f8e43dea85e1718163a798ffc23d42fa0f54473787fc09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'document_ready' => array($this, 'block_document_ready'),
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
        // line 8
        echo "     
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "     
            ";
        // line 15
        echo "     
        </head>
      <body>
     
            ";
        // line 20
        echo "     
            <div class=\"container\">
              ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "              </div>
     
            ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "     
            <script type=\"text/javascript\">
                  \$(document).ready(function() {
                    ";
        // line 31
        $this->displayBlock('document_ready', $context, $blocks);
        // line 32
        echo "                  });
            </script>
        </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bootsrap et Symfony2";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
            ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "                <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
            ";
    }

    // line 31
    public function block_document_ready($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  98 => 26,  95 => 25,  90 => 22,  84 => 10,  81 => 9,  75 => 5,  68 => 32,  66 => 31,  61 => 28,  59 => 25,  55 => 23,  53 => 22,  49 => 20,  43 => 15,  40 => 13,  30 => 5,  24 => 1,  42 => 7,  38 => 9,  35 => 8,  29 => 3,);
    }
}
