<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_035b5166e91d3c4a06ae35d28690f345488f51a2e7aa68e22ef4594c2743365d extends Twig_Template
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
        $__internal_05a9303c9ef8e0a84c38ce5f0568f555423cbb603cb7f8bab43a1c653c11152d = $this->env->getExtension("native_profiler");
        $__internal_05a9303c9ef8e0a84c38ce5f0568f555423cbb603cb7f8bab43a1c653c11152d->enter($__internal_05a9303c9ef8e0a84c38ce5f0568f555423cbb603cb7f8bab43a1c653c11152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_05a9303c9ef8e0a84c38ce5f0568f555423cbb603cb7f8bab43a1c653c11152d->leave($__internal_05a9303c9ef8e0a84c38ce5f0568f555423cbb603cb7f8bab43a1c653c11152d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
