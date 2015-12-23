<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2e7f978bf707f4a6cac7171d7656a63f55eda36c57d1fc64f6c88078bb889501 extends Twig_Template
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
        $__internal_19697298ce0b27486d6dbd37c5e87e8fe79df2985a12d4dea859c86a7305c499 = $this->env->getExtension("native_profiler");
        $__internal_19697298ce0b27486d6dbd37c5e87e8fe79df2985a12d4dea859c86a7305c499->enter($__internal_19697298ce0b27486d6dbd37c5e87e8fe79df2985a12d4dea859c86a7305c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_19697298ce0b27486d6dbd37c5e87e8fe79df2985a12d4dea859c86a7305c499->leave($__internal_19697298ce0b27486d6dbd37c5e87e8fe79df2985a12d4dea859c86a7305c499_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
