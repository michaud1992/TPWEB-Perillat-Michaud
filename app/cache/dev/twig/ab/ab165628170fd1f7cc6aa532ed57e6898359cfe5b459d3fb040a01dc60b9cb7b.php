<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bd457fb670eec57fe0813b676f0b621778813619637ed8734eac879b6febda9c extends Twig_Template
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
        $__internal_e82b4f843d13645d50f6b3bb0d7c97417cb3e6bf3c69fe383a4d79ad488974bd = $this->env->getExtension("native_profiler");
        $__internal_e82b4f843d13645d50f6b3bb0d7c97417cb3e6bf3c69fe383a4d79ad488974bd->enter($__internal_e82b4f843d13645d50f6b3bb0d7c97417cb3e6bf3c69fe383a4d79ad488974bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e82b4f843d13645d50f6b3bb0d7c97417cb3e6bf3c69fe383a4d79ad488974bd->leave($__internal_e82b4f843d13645d50f6b3bb0d7c97417cb3e6bf3c69fe383a4d79ad488974bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
