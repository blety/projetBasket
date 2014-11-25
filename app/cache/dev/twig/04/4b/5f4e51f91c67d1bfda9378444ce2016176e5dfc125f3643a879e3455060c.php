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
        echo "
  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row centered-form\">
      <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><strong>Rencontre à domicile</strong> <small> Formulaire pour enregistrer une rencontre à domicile !!! </small></h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <form role=\"form\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"date\">Date</label>
                  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"convo\">Convocation</label>
                  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "convocation"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"HM\">Heure Match</label>
                  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heureMatch"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"score\">Score</label>
                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "score"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>      
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"equipeDom\">Equipe Domicile</label>
                  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipeDom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"equipeAdv\">Equipe Adverse</label>
                  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipeAdv"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"arbitreA\">Arbitre A</label>
                  ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "arbitreA"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"arbitreB\">Arbitre B</label>
                  ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "arbitreB"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"marqueurA\">Marqueur A</label>
                  ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marqueurA"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"marqueurB\">Marqueur B</label>
                  ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marqueurB"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"marqueurC\">Marqueur C</label>
                  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "marqueurC"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"divers\">Divers</label>
                  ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "divers"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>
              <div class=\"row centered-form\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4 col-md-offset-2\">
                  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
                  <!-- Generate new token -->
                  ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <input TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
                </div>
              </div>
            </form>
            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <table class=\"table table-hover table-bordered table-striped\">
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
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allRencontreDom"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 103
            echo "        <tr>
          <td>
            ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "d/m/Y"), "html", null, true);
            echo "  
          </td>  
          <td nowrap>
            ";
            // line 108
            if ((null === $this->getAttribute($this->getContext($context, "r"), "score"))) {
                // line 109
                echo "              <a href=\"#myModal\" class=\"btnAddProductVersion\" id=\"addProductVersion\" name=\"addProductVersion\" title=\"add product version\" data-toggle=\"modal\" data-target=\"#myModal\"> Score à renseigner </a>
            ";
            } else {
                // line 111
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "score"), "html", null, true);
                echo "
            ";
            }
            // line 113
            echo "          </td> 
          <td>
            ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "divers"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "convocation"), "d/m/Y"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreA"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "arbitreB"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurA"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurB"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "marqueurC"), "html", null, true);
            echo "
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
    </table>
      
      <!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
      </div>
      <div class=\"modal-body\">
        Rajehskqhdqs
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"/ProjectBasket/web/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/ProjectBasket/web/js/flat.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
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
        return array (  267 => 143,  257 => 139,  251 => 136,  245 => 133,  239 => 130,  233 => 127,  227 => 124,  221 => 121,  215 => 118,  209 => 115,  205 => 113,  199 => 111,  195 => 109,  193 => 108,  187 => 105,  183 => 103,  179 => 102,  155 => 81,  145 => 74,  140 => 72,  132 => 67,  125 => 63,  118 => 59,  111 => 55,  102 => 49,  95 => 45,  88 => 41,  81 => 37,  72 => 31,  65 => 27,  58 => 23,  51 => 19,  43 => 14,  31 => 4,  28 => 3,);
    }
}
