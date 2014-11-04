<?php

/* BasketRencontreBundle::rencontreDom.html.twig */
class __TwigTemplate_044b5f4e51f91c67d1bfda9378444ce2016176e5dfc125f3643a879e3455060c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Rencontre à domicile : 
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<table>
  <tr>
    <th>Date</th>    
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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allRencontreDom"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 23
            echo "  <tr>
  <td>
    ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "d/m/Y"), "html", null, true);
            echo "  
  </td>  
  <td>
    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "score"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "divers"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "convocation"), "d/m/Y"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreA"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreB"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurA"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurB"), "html", null, true);
            echo "
    </td>
    <td>
      ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurC"), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  
</table>
  
  ";
    }

    public function getTemplateName()
    {
        return "BasketRencontreBundle::rencontreDom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 59,  122 => 55,  116 => 52,  110 => 49,  104 => 46,  98 => 43,  92 => 40,  86 => 37,  80 => 34,  74 => 31,  68 => 28,  62 => 25,  58 => 23,  54 => 22,  34 => 5,  31 => 4,  28 => 3,);
    }
}
