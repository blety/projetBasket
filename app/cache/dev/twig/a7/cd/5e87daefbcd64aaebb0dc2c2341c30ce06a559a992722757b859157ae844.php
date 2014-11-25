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
    <link rel=\"stylesheet\" href=\"/ProjectBasket/web/css/flat-ui.css\">
    <link rel=\"stylesheet\" href=\"/ProjectBasket/web/css/flat-ui.min.css\">
    <link rel=\"stylesheet\" href=\"/ProjectBasket/web/css/bootstrap-datetimepicker.min.css\">
    <script src=\"/ProjectBasket/web/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"/ProjectBasket/web/js/flat.min.js\"></script>
    <script type=\"text/javascript\">
      ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "      \$(document).ready(function () {
                    ";
        // line 21
        $this->displayBlock('document_ready', $context, $blocks);
        // line 22
        echo "                  });
    </script>
  </head>
  <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project Basket </a>
        </div>
        <div id =\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/ProjectBasket/web/app_dev.php/player/index\">Player Index</a></li>
            <li><a href=\"/ProjectBasket/web/app_dev.php/entrainement/index\">Entrainement Index</a></li>
            <!--<li><a href=\"/ProjectBasket/web/app_dev.php/recontreDom/index\">Rencontres</a></li>-->
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Rencontres <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"/ProjectBasket/web/app_dev.php/rencontreDom/index\">Rencontre Domicile</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Nav header</li>
                <li><a href=\"/ProjectBasket/web/app_dev.php/rencontreExt/index\">Rencontre Extérieur</a></li>
                <!--<li><a href=\"#\">One more separated link</a></li>-->
              </ul>
            </li>
          </ul>
          <form class=\"navbar-form navbar-right\" style=\"padding-left: 0px\" role=\"form\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class=\"container\" style=\"margin-top: 100px\">
      ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "    </div>
    <footer class=\"container\" style=\"text-align: center\">
      <p>© ProjectBasket 2014</p>
    </footer>
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

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 21
    public function block_document_ready($context, array $blocks = array())
    {
    }

    // line 66
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
        return array (  136 => 21,  130 => 19,  124 => 7,  118 => 5,  108 => 67,  106 => 66,  60 => 22,  58 => 21,  55 => 20,  53 => 19,  35 => 7,  30 => 5,  24 => 1,  245 => 140,  235 => 136,  229 => 133,  223 => 130,  217 => 127,  211 => 124,  205 => 121,  199 => 118,  193 => 115,  187 => 112,  183 => 110,  179 => 109,  156 => 89,  146 => 82,  141 => 66,  128 => 70,  119 => 64,  112 => 60,  105 => 56,  96 => 50,  89 => 46,  80 => 40,  73 => 36,  66 => 32,  59 => 28,  51 => 23,  40 => 9,  37 => 8,  29 => 3,);
    }
}
