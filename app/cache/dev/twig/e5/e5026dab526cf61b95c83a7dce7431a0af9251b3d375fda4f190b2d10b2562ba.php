<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_99a5f2a0642ffec078b6bffeec0862db89ba478f6ccb62226ae62e33a32e3e0e extends Twig_Template
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
        $__internal_906c81194f1e4c27d48632c630a9daf0e0a8f1c2217f5c838b3468398d478631 = $this->env->getExtension("native_profiler");
        $__internal_906c81194f1e4c27d48632c630a9daf0e0a8f1c2217f5c838b3468398d478631->enter($__internal_906c81194f1e4c27d48632c630a9daf0e0a8f1c2217f5c838b3468398d478631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_906c81194f1e4c27d48632c630a9daf0e0a8f1c2217f5c838b3468398d478631->leave($__internal_906c81194f1e4c27d48632c630a9daf0e0a8f1c2217f5c838b3468398d478631_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
