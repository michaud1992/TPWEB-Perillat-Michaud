<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f18059c5749f949ffd6a3d18de7361e714e54a6dee89d7a48d7fe2b3064e6246 extends Twig_Template
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
        $__internal_8002f7f7a373e85eaad90af5a6981bcff5288549115988d71835b09c25451b61 = $this->env->getExtension("native_profiler");
        $__internal_8002f7f7a373e85eaad90af5a6981bcff5288549115988d71835b09c25451b61->enter($__internal_8002f7f7a373e85eaad90af5a6981bcff5288549115988d71835b09c25451b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8002f7f7a373e85eaad90af5a6981bcff5288549115988d71835b09c25451b61->leave($__internal_8002f7f7a373e85eaad90af5a6981bcff5288549115988d71835b09c25451b61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
