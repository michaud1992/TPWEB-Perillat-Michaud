<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b10ec63d095bf030cbf613db31bb3f3694b3ed3a6832ec8d895a07497b109c67 extends Twig_Template
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
        $__internal_9777c5f4d4dad4825471a5ecaef1d644c690a2d9b402dac35d3427575232da15 = $this->env->getExtension("native_profiler");
        $__internal_9777c5f4d4dad4825471a5ecaef1d644c690a2d9b402dac35d3427575232da15->enter($__internal_9777c5f4d4dad4825471a5ecaef1d644c690a2d9b402dac35d3427575232da15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9777c5f4d4dad4825471a5ecaef1d644c690a2d9b402dac35d3427575232da15->leave($__internal_9777c5f4d4dad4825471a5ecaef1d644c690a2d9b402dac35d3427575232da15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
