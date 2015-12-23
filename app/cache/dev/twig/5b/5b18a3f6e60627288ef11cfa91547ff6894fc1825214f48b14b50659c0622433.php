<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_157e3dd5e877d0934c952088770265ba36d96fcc11d1570fd13c81d5e09117b2 extends Twig_Template
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
        $__internal_8b43876e32bd631d30618343e2ec3b89040b0042f9df5f34d427b41764d8c495 = $this->env->getExtension("native_profiler");
        $__internal_8b43876e32bd631d30618343e2ec3b89040b0042f9df5f34d427b41764d8c495->enter($__internal_8b43876e32bd631d30618343e2ec3b89040b0042f9df5f34d427b41764d8c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8b43876e32bd631d30618343e2ec3b89040b0042f9df5f34d427b41764d8c495->leave($__internal_8b43876e32bd631d30618343e2ec3b89040b0042f9df5f34d427b41764d8c495_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
