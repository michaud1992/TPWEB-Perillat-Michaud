<?php

/* APBPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_22dc3c1dbc541cc8cdcd15a6883b16e561a46253c9dc85c0aef944421c4b006e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APBPlatformBundle::layout.html.twig", "APBPlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_ba8915fac54ec91849f8c751c18970cf8931338bf6e8e590fa2a2b99d8573c49 = $this->env->getExtension("native_profiler");
        $__internal_ba8915fac54ec91849f8c751c18970cf8931338bf6e8e590fa2a2b99d8573c49->enter($__internal_ba8915fac54ec91849f8c751c18970cf8931338bf6e8e590fa2a2b99d8573c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8915fac54ec91849f8c751c18970cf8931338bf6e8e590fa2a2b99d8573c49->leave($__internal_ba8915fac54ec91849f8c751c18970cf8931338bf6e8e590fa2a2b99d8573c49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4c819c849a8e40c38eb8f3ed9eed2d9b4cef14f0d7e3113704fdc270332ad2 = $this->env->getExtension("native_profiler");
        $__internal_3c4c819c849a8e40c38eb8f3ed9eed2d9b4cef14f0d7e3113704fdc270332ad2->enter($__internal_3c4c819c849a8e40c38eb8f3ed9eed2d9b4cef14f0d7e3113704fdc270332ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c4c819c849a8e40c38eb8f3ed9eed2d9b4cef14f0d7e3113704fdc270332ad2->leave($__internal_3c4c819c849a8e40c38eb8f3ed9eed2d9b4cef14f0d7e3113704fdc270332ad2_prof);

    }

    // line 7
    public function block_apbplatform_body($context, array $blocks = array())
    {
        $__internal_c0c15cfda0790527d130c66dc0569f41846816c00ad8fd68283ac5eb410fb38d = $this->env->getExtension("native_profiler");
        $__internal_c0c15cfda0790527d130c66dc0569f41846816c00ad8fd68283ac5eb410fb38d->enter($__internal_c0c15cfda0790527d130c66dc0569f41846816c00ad8fd68283ac5eb410fb38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apbplatform_body"));

        // line 8
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "APBPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apb_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_c0c15cfda0790527d130c66dc0569f41846816c00ad8fd68283ac5eb410fb38d->leave($__internal_c0c15cfda0790527d130c66dc0569f41846816c00ad8fd68283ac5eb410fb38d_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "APBPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block apbplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("APBPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('apb_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
