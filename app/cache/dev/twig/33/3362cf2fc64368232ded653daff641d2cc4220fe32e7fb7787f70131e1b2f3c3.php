<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ef8fb39a0609241f11ea7081f43c05f35ecb6d81fbbb6d47601a85c9d83bcc13 extends Twig_Template
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
        $__internal_5413d9733b4467f317d30b1b58e63f001d82d0304d1fcd2ee9c5b739c1815f1f = $this->env->getExtension("native_profiler");
        $__internal_5413d9733b4467f317d30b1b58e63f001d82d0304d1fcd2ee9c5b739c1815f1f->enter($__internal_5413d9733b4467f317d30b1b58e63f001d82d0304d1fcd2ee9c5b739c1815f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5413d9733b4467f317d30b1b58e63f001d82d0304d1fcd2ee9c5b739c1815f1f->leave($__internal_5413d9733b4467f317d30b1b58e63f001d82d0304d1fcd2ee9c5b739c1815f1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
