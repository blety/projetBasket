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
  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row centered-form\">
      <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><strong>Tous les entrainements</strong> <small> Formulaire pour programmer un entrainement !!! </small></h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <form role=\"form\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"jour\">Jour</label>
                  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "jour"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"debut\">Début</label>
                  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "debut"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"fin\">Fin</label>
                  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fin"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"obligatoire\">Obligatoire</label>
                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "obligatoire"), 'widget', array("attr" => array("class" => "checkbox")));
        echo "
                </div>      
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"salle\">Salle</label>
                  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "salle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"entraineur\">Entraineur</label>
                  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entraineur"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"equipe\">Equipe</label>
                  ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipe"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row centered-form\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4 col-md-offset-2\">
                  ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
                  <!-- Generate new token -->
                  ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <input TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
                </div>
              </div>
            </form>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <table class=\"table table-hover table-bordered\">
      <tr class=\"info\">
        <th>Date</th>
        <th>Début</th>
        <th>Fin</th>
        <th>Obligatoire</th>
        <th>Salle</th>
        <th>Entraineur</th>
        <th>Equipe</th>   
      </tr>

      ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allEntrainement"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 78
            echo "        <tr class=\"success\">
          <td>
            ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "jour"), "d/m/Y"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "debut"), "h:m"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "fin"), "h:m"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "obligatoire"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "salle"), "nom"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "e"), "entraineur"), "nom"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "e"), "equipe"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td>  
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
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
        return array (  193 => 102,  183 => 98,  177 => 95,  171 => 92,  165 => 89,  159 => 86,  153 => 83,  147 => 80,  143 => 78,  139 => 77,  118 => 59,  108 => 52,  103 => 50,  95 => 45,  88 => 41,  81 => 37,  72 => 31,  65 => 27,  58 => 23,  51 => 19,  43 => 14,  31 => 4,  28 => 3,);
    }
}
