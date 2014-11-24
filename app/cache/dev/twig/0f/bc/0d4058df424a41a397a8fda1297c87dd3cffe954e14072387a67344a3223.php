<?php

/* BasketPlayerBundle::index.html.twig */
class __TwigTemplate_0fbc0d4058df424a41a397a8fda1297c87dd3cffe954e14072387a67344a3223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " 
  Player Index
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row centered-form\">
      <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><strong>Inscription</strong> <small> Formulaire pour l'inscription d'une personne !!! </small></h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <form role=\"form\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"nom\">Nom</label>
                  ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"prenom\">Prenom</label>
                  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"genre\">Genre</label>
                  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "genre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"refP\">Type</label>
                  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "refPersonne"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>      
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-6\">
                  <label for=\"adresse\">Adresse</label>
                  ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-6\">
                  <label for=\"adresseP\">Adresse Parents</label>
                  ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseParents"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"mobile\">Mobile</label>
                  ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"tel\">Tel</label>
                  ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"license\">License</label>
                  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "license"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-12\">
                  <label for=\"divers\">Divers</label>
                  ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "divers"), 'widget', array("attr" => array("class" => "form-control pull-right")));
        echo "
                </div>    
              </div>
              <!-- <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\"> Check me out
                </label>
              </div> -->
              <div class=\"row centered-form\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4 col-md-offset-2\">
                  ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
                  <!-- Generate new token -->
                  ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <INPUT TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
                </div>
              </div>
            </form>
            ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <div>
      <table class=\"table table-hover table-bordered\">
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
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allPlayers"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 110
            echo "          <tr>
            <td>
              ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "nom"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "prenom"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "genre"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "adresse"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "adresseParents"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "mobile"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "tel"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "license"), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "divers"), "html", null, true);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
      </table>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  ";
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
        return array (  245 => 140,  235 => 136,  229 => 133,  223 => 130,  217 => 127,  211 => 124,  205 => 121,  199 => 118,  193 => 115,  187 => 112,  183 => 110,  179 => 109,  156 => 89,  146 => 82,  141 => 80,  128 => 70,  119 => 64,  112 => 60,  105 => 56,  96 => 50,  89 => 46,  80 => 40,  73 => 36,  66 => 32,  59 => 28,  51 => 23,  40 => 14,  37 => 13,  29 => 3,);
    }
}
