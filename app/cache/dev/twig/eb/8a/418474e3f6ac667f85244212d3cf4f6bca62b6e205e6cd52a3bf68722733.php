<?php

/* BasketEntrainementBundle::index.html.twig */
class __TwigTemplate_eb8a418474e3f6ac667f85244212d3cf4f6bca62b6e205e6cd52a3bf68722733 extends Twig_Template
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
        echo "Tous les entrainements

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<table>
  <tr>
    <th>Date</th>
    <th>Début</th>
    <th>Fin</th>
    <th>Obligatoire</th>
    <th>Salle</th>
    <th>Entraineur</th>
    <th>Equipe</th>   
  </tr>
  
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allEntrainement"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "  <tr>
  <td>
  ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "jour"), "d/m/Y"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "debut"), "d/m/Y"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "fin"), "d/m/Y"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "obligatoire"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "salle"), "nom"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "entraineur"), "nom"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "equipe"), "annee"), "d/m/Y"), "html", null, true);
            echo "
  </td>  
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  
</table>";
    }

    public function getTemplateName()
    {
        return "BasketEntrainementBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 41,  83 => 37,  77 => 34,  71 => 31,  65 => 28,  59 => 25,  53 => 22,  47 => 19,  43 => 17,  39 => 16,  23 => 3,  19 => 1,);
    }
}
