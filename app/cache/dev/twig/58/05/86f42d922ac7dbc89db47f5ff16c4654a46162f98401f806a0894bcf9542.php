<?php

/* BasketRencontreBundle::index.html.twig */
class __TwigTemplate_580586f42d922ac7dbc89db47f5ff16c4654a46162f98401f806a0894bcf9542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Rencontre à domicile : 
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<table>
  <tr>
    <th>Date</th>
    <th>Type</th>
    <th>Score</th>
    <th>Divers</th>    
    <th>Convocation</th>
    <th>Equipe à domicile</th>
    <th>Equipe adverse</th>
    <th>Arbitre A</th>
    <th>Arbitre B</th>
    <th>Marqueur A</th>
    <th>Marqueur B</th>
    <th>Marqueur C</th>
  </tr>
  
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allRencontreDom"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 21
            echo "  <tr>
  <td>
    ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "d/m/Y"), "html", null, true);
            echo "  
  </td>
  <td>
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "type"), "html", null, true);
            echo "
    
  </td>
  <td>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "score"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "divers"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "convocation"), "d/m/Y"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreA"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreB"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurA"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurB"), "html", null, true);
            echo "
    </td>
    <td>
      ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurC"), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  
</table>";
    }

    public function getTemplateName()
    {
        return "BasketRencontreBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  118 => 57,  112 => 54,  106 => 51,  100 => 48,  94 => 45,  88 => 42,  82 => 39,  76 => 36,  70 => 33,  64 => 30,  57 => 26,  51 => 23,  47 => 21,  43 => 20,  22 => 2,  19 => 1,);
    }
}
