<?php

/* BasketPlayerBundle:Default:index.html.twig */
class __TwigTemplate_8bcdae89ab7fb2323e1388ab68b104c383bd749b5fe083e875d859f8c456a6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Player Index ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Project name</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <form class=\"navbar-form navbar-right\" role=\"form\">
          <div class=\"form-group\">
            <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
          </div>
          <div class=\"form-group\">
            <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
          </div>
          <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
        </form>
      </div><!--/.navbar-collapse -->
    </div>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class=\"jumbotron\">
    <div class=\"container\">
      <h1>Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more »</a></p>
    </div>
  </div>

  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
      <div class=\"col-md-4\">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
      </div>
      <div class=\"col-md-4\">

      </div>
      <div class=\"col-md-4\">
        <h2> Formulaire </h2>
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"nom\">Nom</label>
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"prenom\">Prenom</label>
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"genre\">Genre</label>
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "genre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"adresse\">Adresse</label>
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"adresseP\">Adresse Parents</label>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseParents"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"mobile\">Mobile</label>
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"tel\">Tel</label>
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"license\">License</label>
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "license"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"divers\">Divers</label>
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "divers"), 'widget', array("attr" => array("class" => "form-control pull-right")));
        echo "
          </div>
          <div class=\"form-group\">
            <label for=\"refP\">Ref.Personne</label>
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "refPersonne"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>          
          <!-- <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\"> Check me out
            </label>
          </div> -->
          ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
          <!-- Generate new token -->
          ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
          <INPUT TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
        </form>
        ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
      </div>
    </div>

    <hr>

    <footer>
      <p>© Company 2014</p>
    </footer>
  </div> <!-- /container -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
  <script src=\"../../dist/js/bootstrap.min.js\"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "BasketPlayerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 104,  172 => 101,  167 => 99,  157 => 92,  150 => 88,  143 => 84,  136 => 80,  129 => 76,  122 => 72,  115 => 68,  108 => 64,  101 => 60,  94 => 56,  87 => 52,  38 => 5,  35 => 4,  29 => 3,);
    }
}
