<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_649d25ccdb00082b8b092140bb2989ec93cafbae576d417310fa0a168598cd89 extends Twig_Template
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
        $__internal_ef9365657c4daba4fced588b85894dcbe95679ff6f87b8f400b5bf2af4b66618 = $this->env->getExtension("native_profiler");
        $__internal_ef9365657c4daba4fced588b85894dcbe95679ff6f87b8f400b5bf2af4b66618->enter($__internal_ef9365657c4daba4fced588b85894dcbe95679ff6f87b8f400b5bf2af4b66618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ef9365657c4daba4fced588b85894dcbe95679ff6f87b8f400b5bf2af4b66618->leave($__internal_ef9365657c4daba4fced588b85894dcbe95679ff6f87b8f400b5bf2af4b66618_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
