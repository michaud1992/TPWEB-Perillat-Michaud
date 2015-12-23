<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_71b5fc1c6d3ca6cf96639c23210bb9005a072e2d4736e8898f37e170ba07e3d5 extends Twig_Template
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
        $__internal_08497729f3e5e625c405647cbadf15c994a73e26a8d1ff8b6134f7b3380c3319 = $this->env->getExtension("native_profiler");
        $__internal_08497729f3e5e625c405647cbadf15c994a73e26a8d1ff8b6134f7b3380c3319->enter($__internal_08497729f3e5e625c405647cbadf15c994a73e26a8d1ff8b6134f7b3380c3319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_08497729f3e5e625c405647cbadf15c994a73e26a8d1ff8b6134f7b3380c3319->leave($__internal_08497729f3e5e625c405647cbadf15c994a73e26a8d1ff8b6134f7b3380c3319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
