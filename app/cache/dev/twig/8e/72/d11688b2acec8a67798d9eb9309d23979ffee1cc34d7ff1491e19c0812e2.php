<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8e72d11688b2acec8a67798d9eb9309d23979ffee1cc34d7ff1491e19c0812e2 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  55 => 13,  25 => 3,  21 => 2,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  229 => 126,  219 => 122,  213 => 119,  207 => 116,  201 => 92,  195 => 110,  189 => 107,  183 => 82,  179 => 102,  175 => 101,  154 => 83,  144 => 76,  139 => 74,  126 => 64,  117 => 44,  110 => 54,  103 => 50,  94 => 22,  87 => 20,  78 => 40,  71 => 30,  64 => 12,  57 => 16,  49 => 19,  36 => 7,  31 => 5,  28 => 3,);
    }
}
