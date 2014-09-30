<?php

/* BasketRencontreBundle::index.html.twig */
class __TwigTemplate_580586f42d922ac7dbc89db47f5ff16c4654a46162f98401f806a0894bcf9542 extends Twig_Template
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
        echo "Rencontre à domicile : 
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "BasketRencontreBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
