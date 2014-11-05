<?php

/* AcmeTwigBundle:Default:index.html.twig */
class __TwigTemplate_0d2f2985cfa08e566954110e42c012d0d4e0608e79b00ca2f0895853a293aa9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-2\">BIM</div><div class=\"col-md-2\">BIM</div>
    <div class=\"media\">
      Hello ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
    </div
    <div class=\"row\">TEST&1</div>
    <div class=\"row\">TEST&2</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeTwigBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 5,  28 => 4,);
    }
}
