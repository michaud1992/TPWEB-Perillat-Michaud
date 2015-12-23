<?php

/* PMTPBundle:Default:form.html.twig */
class __TwigTemplate_dd4939be0b4fd6602fb114587d9900cdb468de62ba2d732a33193613967d39e8 extends Twig_Template
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
        $__internal_f24b55051560e0b54113335e0ce4263ef8b9075ff2e3a51782f8c72478c5fd82 = $this->env->getExtension("native_profiler");
        $__internal_f24b55051560e0b54113335e0ce4263ef8b9075ff2e3a51782f8c72478c5fd82->enter($__internal_f24b55051560e0b54113335e0ce4263ef8b9075ff2e3a51782f8c72478c5fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
        
        $__internal_f24b55051560e0b54113335e0ce4263ef8b9075ff2e3a51782f8c72478c5fd82->leave($__internal_f24b55051560e0b54113335e0ce4263ef8b9075ff2e3a51782f8c72478c5fd82_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:form.html.twig";
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
/* <h3>Formulaire d'article</h3>*/
/* */
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
