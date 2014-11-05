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

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Project Basket </a>
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
    <div>
        <br>
    </div>
    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row centered-form\">
            <div class=\"col-md-10 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><strong>Inscription</strong> <small> Formulaire pour l'inscription d'une personne !!! </small></h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
                        <form role=\"form\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                                    <label for=\"nom\">Nom</label>
                                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-3\">
                                    <label for=\"prenom\">Prenom</label>
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                                    <label for=\"genre\">Genre</label>
                                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "genre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-6 col-sm-6 col-md-3\">
                                    <label for=\"refP\">Type</label>
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "refPersonne"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>      
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-6\">
                                    <label for=\"adresse\">Adresse</label>
                                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-6\">
                                    <label for=\"adresseP\">Adresse Parents</label>
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseParents"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                                    <label for=\"mobile\">Mobile</label>
                                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                                    <label for=\"tel\">Tel</label>
                                    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                                    <label for=\"license\">License</label>
                                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "license"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-12\">
                                    <label for=\"divers\">Divers</label>
                                    ";
        // line 144
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
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "btn btn-success btn-lg btn-block")));
        echo "
                                    <!-- Generate new token -->
                                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group col-xs-12 col-sm-6 col-md-4\">
                                    <INPUT TYPE=\"reset\" class=\"btn btn-danger btn-lg btn-block\" NAME=\"nom\" VALUE=\"Annuler\">
                                </div>
                            </div>
                        </form>
                        ";
        // line 163
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                    </div>
                </div>
            </div>

            <hr>
            <footer>
                <p>© ProjectBasket 2014</p>
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
        return "BasketPlayerBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 163,  173 => 156,  168 => 154,  155 => 144,  146 => 138,  139 => 134,  132 => 130,  123 => 124,  116 => 120,  107 => 114,  100 => 110,  93 => 106,  86 => 102,  78 => 97,  40 => 61,  37 => 60,  29 => 3,);
    }
}
