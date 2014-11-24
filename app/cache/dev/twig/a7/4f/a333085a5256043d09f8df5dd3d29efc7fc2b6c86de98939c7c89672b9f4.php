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
        echo "  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row centered-form\">
      <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><strong>Rencontre à l'éxtérieur</strong> <small> Formulaire pour enregistrer une rencontre à l'extérieur !!! </small></h3>
          </div>
          <div class=\"panel-body\">
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <form role=\"form\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"date\">Date</label>
                  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                  <label for=\"heureDepart\">Heure Départ</label>
                  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heureDepart"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"HM\">Heure Match</label>
                  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heureMatch"), 'widget', array("attr" => array("class" => "input-append")));
        echo "
                </div>
                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                  <label for=\"score\">Score</label>
                  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "score"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>      
              </div>
              <div class=\"row\">
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"transport\">Transport</label>
                  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "transport"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"equipeDom\">Equipe Domicile</label>
                  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipeDom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                  <label for=\"equipeAdv\">Equipe Adverse</label>
                  ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "equipeAdv"), 'widget', array("attr" => array("class" => "form-control")));
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

    <table class=\"table table-hover table-bordered\">
      <tr class=\"info\">
        <th>Date</th>
        <th>Heure Match</th>
        <th>Score</th>        
        <th>Equipe à domicile</th>
        <th>Equipe adverse</th>    
      </tr>

      ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allRencontreExt"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 74
            echo "        <tr class=\"success\">
          <td>
            ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "d/m/Y"), "html", null, true);
            echo "  
          </td>  
          <td>
            ";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "heureMatch"), "h:m"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 82
            if ((null === $this->getAttribute($this->getContext($context, "r"), "score"))) {
                // line 83
                echo "              score à renseigner
            ";
            } else {
                // line 85
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "score"), "html", null, true);
                echo "
              <a href=\"#\" class=\"btnAddProductVersion\" id=\"addProductVersion\" name=\"addProductVersion\" title=\"add product version\"> Add </a>

            ";
            }
            // line 89
            echo "          </td>    
          <td>
            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "club"), "html", null, true);
            echo " -
            ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeDom"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "club"), "html", null, true);
            echo " - 
            ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "r"), "equipeAdv"), "categorie"), "sigle"), "html", null, true);
            echo "
          </td> 
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
    </table>
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  ";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        echo "    \$(document).ready(function() { 
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
        return array (  214 => 111,  211 => 110,  198 => 100,  188 => 96,  184 => 95,  178 => 92,  174 => 91,  170 => 89,  162 => 85,  158 => 83,  156 => 82,  150 => 79,  144 => 76,  140 => 74,  136 => 73,  118 => 58,  108 => 51,  103 => 49,  95 => 44,  88 => 40,  81 => 36,  72 => 30,  65 => 26,  58 => 22,  51 => 18,  43 => 13,  32 => 4,  29 => 3,);
    }
}
