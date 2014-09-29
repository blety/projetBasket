<?php

/* BasketPlayerBundle:Default:index.html.twig */
class __TwigTemplate_9c2be24bd919a778f5b5889614d9f05365a010aefe2d11b8a5453fbcdb1ce948 extends Twig_Template
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
        return "BasketPlayerBundle:Default:index.html.twig";
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
