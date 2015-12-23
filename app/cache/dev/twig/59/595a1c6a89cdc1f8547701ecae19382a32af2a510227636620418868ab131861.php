<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_edce1bfb3fd816a94bbf2dbd9f56e842d3306834b2ac601b6612ab9e43036771 extends Twig_Template
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
        $__internal_999b43af82b01f2d3d7fc4872960a93c8a105c191a5fa9d3af635b09fd2ea05b = $this->env->getExtension("native_profiler");
        $__internal_999b43af82b01f2d3d7fc4872960a93c8a105c191a5fa9d3af635b09fd2ea05b->enter($__internal_999b43af82b01f2d3d7fc4872960a93c8a105c191a5fa9d3af635b09fd2ea05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_999b43af82b01f2d3d7fc4872960a93c8a105c191a5fa9d3af635b09fd2ea05b->leave($__internal_999b43af82b01f2d3d7fc4872960a93c8a105c191a5fa9d3af635b09fd2ea05b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
