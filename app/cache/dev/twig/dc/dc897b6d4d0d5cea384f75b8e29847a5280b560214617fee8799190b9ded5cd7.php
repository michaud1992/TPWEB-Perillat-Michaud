<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1ee7f4677a73b9092a4526e7d7feaec5454b7800c7669d4ace9ebcf081cb7938 extends Twig_Template
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
        $__internal_3f75e65d6967bc4126a2b241939c7ecc81e8c3a5b6e22fd430f094aa2ea3c8c6 = $this->env->getExtension("native_profiler");
        $__internal_3f75e65d6967bc4126a2b241939c7ecc81e8c3a5b6e22fd430f094aa2ea3c8c6->enter($__internal_3f75e65d6967bc4126a2b241939c7ecc81e8c3a5b6e22fd430f094aa2ea3c8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3f75e65d6967bc4126a2b241939c7ecc81e8c3a5b6e22fd430f094aa2ea3c8c6->leave($__internal_3f75e65d6967bc4126a2b241939c7ecc81e8c3a5b6e22fd430f094aa2ea3c8c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
