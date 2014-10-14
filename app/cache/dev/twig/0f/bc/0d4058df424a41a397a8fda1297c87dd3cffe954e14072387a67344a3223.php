<?php

/* BasketPlayerBundle::index.html.twig */
class __TwigTemplate_0fbc0d4058df424a41a397a8fda1297c87dd3cffe954e14072387a67344a3223 extends Twig_Template
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
        echo "Tous les joueurs

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<table>
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Genre</th>
    <th>Adresse</th>
    <th>Adresse des parents</th>
    <th>Mobile</th>
    <th>Telephone</th>
    <th>License</th>
    <th>Divers</th>
  </tr>
  
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allPlayers"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 19
            echo "  <tr>
  <td>
  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "nom"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "prenom"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "genre"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "adresse"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "adresseParents"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "mobile"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "tel"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "license"), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "divers"), "html", null, true);
            echo "
  </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  
</table>";
    }

    public function getTemplateName()
    {
        return "BasketPlayerBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  97 => 45,  91 => 42,  85 => 39,  79 => 36,  73 => 33,  67 => 30,  61 => 27,  55 => 24,  49 => 21,  45 => 19,  41 => 18,  23 => 3,  19 => 1,);
    }
}
