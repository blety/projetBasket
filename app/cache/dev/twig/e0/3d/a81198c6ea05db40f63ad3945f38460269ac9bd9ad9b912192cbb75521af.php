<?php

/* BasketEntrainementBundle:Default:index.html.twig */
class __TwigTemplate_e03da81198c6ea05db40f63ad3945f38460269ac9bd9ad9b912192cbb75521af extends Twig_Template
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
        echo "Coucou !

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "BasketEntrainementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
