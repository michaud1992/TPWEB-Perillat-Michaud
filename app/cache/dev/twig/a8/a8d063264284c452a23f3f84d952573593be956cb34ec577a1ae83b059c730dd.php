<?php

/* APBPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_3d0e2ed30644b928b811b87a3e6914c61ce859c6152f497628dae03b736cef80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APBPlatformBundle::layout.html.twig", "APBPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'apbplatform_body' => array($this, 'block_apbplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_609baeb16ad34b2f116365d2b24cd4eba8d3e039cf945003a815668e472f6094 = $this->env->getExtension("native_profiler");
        $__internal_609baeb16ad34b2f116365d2b24cd4eba8d3e039cf945003a815668e472f6094->enter($__internal_609baeb16ad34b2f116365d2b24cd4eba8d3e039cf945003a815668e472f6094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609baeb16ad34b2f116365d2b24cd4eba8d3e039cf945003a815668e472f6094->leave($__internal_609baeb16ad34b2f116365d2b24cd4eba8d3e039cf945003a815668e472f6094_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ff56373c1e0785e495158e021c63a489521a891ca1f5f37940acef92ee4b84 = $this->env->getExtension("native_profiler");
        $__internal_a4ff56373c1e0785e495158e021c63a489521a891ca1f5f37940acef92ee4b84->enter($__internal_a4ff56373c1e0785e495158e021c63a489521a891ca1f5f37940acef92ee4b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4ff56373c1e0785e495158e021c63a489521a891ca1f5f37940acef92ee4b84->leave($__internal_a4ff56373c1e0785e495158e021c63a489521a891ca1f5f37940acef92ee4b84_prof);

    }

    // line 7
    public function block_apbplatform_body($context, array $blocks = array())
    {
        $__internal_3125d0a2f22080fbe45130d678766cdc860520a7aeee64349e61a485ec717291 = $this->env->getExtension("native_profiler");
        $__internal_3125d0a2f22080fbe45130d678766cdc860520a7aeee64349e61a485ec717291->enter($__internal_3125d0a2f22080fbe45130d678766cdc860520a7aeee64349e61a485ec717291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apbplatform_body"));

        // line 8
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "APBPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une nouvelle annonce.
  </p>

  <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("apb_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

";
        
        $__internal_3125d0a2f22080fbe45130d678766cdc860520a7aeee64349e61a485ec717291->leave($__internal_3125d0a2f22080fbe45130d678766cdc860520a7aeee64349e61a485ec717291_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "APBPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block apbplatform_body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("APBPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une nouvelle annonce.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('apb_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
