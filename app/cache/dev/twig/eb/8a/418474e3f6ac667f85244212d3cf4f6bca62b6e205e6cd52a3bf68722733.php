<?php

/* BasketEntrainementBundle::index.html.twig */
class __TwigTemplate_eb8a418474e3f6ac667f85244212d3cf4f6bca62b6e205e6cd52a3bf68722733 extends Twig_Template
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
        echo "
    <!-- Example row of columns -->
    <div class=\"row centered-form\">
      <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><strong>Tous les entrainements</strong> <small> Formulaire pour programmer un entrainement !!! </small></h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <form role=\"form\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"jour\">Jour</label>
                  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "jour"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"debut\">Début</label>
                  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "debut"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"fin\">Fin</label>
                  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fin"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"obligatoire\">Obligatoire</label>
                  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "obligatoire"), 'widget', array("attr" => array("class" => "checkbox")));
        echo "
                </div>      
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"salle\">Salle</label>
                  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "salle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"entraineur\">Entraineur</label>
                  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entraineur"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"equipe\">Equipe</label>
                  ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipe"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row centered-form\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4 col-md-offset-2\">
                  ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
                  <!-- Generate new token -->
                  ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <input TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
                </div>
              </div>
            </form>
            ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <table class=\"table table-hover table-bordered table-striped\">
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
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allEntrainement"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 77
            echo "        <tr>
          <td>
            ";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "jour"), "d/m/Y"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "debut"), "h:m"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "fin"), "h:m"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "obligatoire"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "salle"), "nom"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "entraineur"), "nom"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "e"), "equipe"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td>  
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
    </table>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"/ProjectBasket/web/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/ProjectBasket/web/js/flat.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>

    <script type=\"text/javascript\">
      \$(function () {
        \$('#datetimepicker4').datetimepicker({
          pickTime: false
        });
      });
    </script>
  ";
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
        return array (  192 => 101,  182 => 97,  176 => 94,  170 => 91,  164 => 88,  158 => 85,  152 => 82,  146 => 79,  142 => 77,  138 => 76,  117 => 58,  107 => 51,  102 => 49,  94 => 44,  87 => 40,  80 => 36,  71 => 30,  64 => 26,  57 => 22,  50 => 18,  42 => 13,  31 => 4,  28 => 3,);
    }
}
