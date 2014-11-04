<?php

/* BasketRencontreBundle::rencontreExt.html.twig */
class __TwigTemplate_a74fa333085a5256043d09f8df5dd3d29efc7fc2b6c86de98939c7c89672b9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Rencontre à l'extérieur : 
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<table>
  <tr>
    <th>Date</th>
    <th>Heure Match</th>
    <th>Score</th>        
    <th>Equipe à domicile</th>
    <th>Equipe adverse</th>    
  </tr>
  
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allRencontreExt"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 17
            echo "  <tr>
  <td>
    ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "d/m/Y"), "html", null, true);
            echo "  
  </td>  
  <td>
    ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "heureMatch"), "h:m"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 25
            if ((null === $this->getAttribute($this->getContext($context, "r"), "score"))) {
                // line 26
                echo "      score à renseigner
      ";
            } else {
                // line 28
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "score"), "html", null, true);
                echo "
    <a href=\"#\" class=\"btnAddProductVersion\" id=\"addProductVersion\" name=\"addProductVersion\" title=\"add product version\"> Add </a>

    ";
            }
            // line 32
            echo "  </td>    
  <td>
    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "club"), "html", null, true);
            echo " -
    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "club"), "html", null, true);
            echo " - 
    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "categorie"), "sigle"), "html", null, true);
            echo "
  </td> 
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  
</table>
  ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "  \$(document).ready(function() { 
    // -------------------- if click, lauch pop up ------------
     
    \$('.btnAddVendor').click(function(){
        loadPopUpAddVendor();
        center();
    });
     
    \$('.btnAddProduct').click(function(){
        loadPopUpAddProduct();
        center();
    });
     
    \$('.btnAddProductVersion').click(function(){
        loadPopUpAddProductVersion();
        center();
    });
     
    \$('.closepopup').click(function(){
        disable();
    });
     
    \$('.background').click(function(){
        disable();
    });
});
";
    }

    public function getTemplateName()
    {
        return "BasketRencontreBundle::rencontreExt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  117 => 46,  111 => 43,  101 => 39,  97 => 38,  91 => 35,  87 => 34,  83 => 32,  75 => 28,  71 => 26,  69 => 25,  63 => 22,  57 => 19,  53 => 17,  49 => 16,  35 => 5,  32 => 4,  29 => 3,);
    }
}
