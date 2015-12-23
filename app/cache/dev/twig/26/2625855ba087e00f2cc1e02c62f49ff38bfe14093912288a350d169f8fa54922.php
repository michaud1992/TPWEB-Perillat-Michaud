<?php

/* PMTPBundle:Default:add.html.twig */
class __TwigTemplate_75dec30c2554d4de47f057c46513e26270dc9f30b476e1c7c8ae88ae65a2ce10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pmtp_body' => array($this, 'block_pmtp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMTPBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45b9ec763779e14fbdcae467239991dcbf54c80df9ee064dc9608ffb8f156a36 = $this->env->getExtension("native_profiler");
        $__internal_45b9ec763779e14fbdcae467239991dcbf54c80df9ee064dc9608ffb8f156a36->enter($__internal_45b9ec763779e14fbdcae467239991dcbf54c80df9ee064dc9608ffb8f156a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b9ec763779e14fbdcae467239991dcbf54c80df9ee064dc9608ffb8f156a36->leave($__internal_45b9ec763779e14fbdcae467239991dcbf54c80df9ee064dc9608ffb8f156a36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4213dd64acb9f9512970610251e378a3c20ffc5f7f5518a3570072a5a269d4c4 = $this->env->getExtension("native_profiler");
        $__internal_4213dd64acb9f9512970610251e378a3c20ffc5f7f5518a3570072a5a269d4c4->enter($__internal_4213dd64acb9f9512970610251e378a3c20ffc5f7f5518a3570072a5a269d4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajouter une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4213dd64acb9f9512970610251e378a3c20ffc5f7f5518a3570072a5a269d4c4->leave($__internal_4213dd64acb9f9512970610251e378a3c20ffc5f7f5518a3570072a5a269d4c4_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_b4cf3f4848f1c526f82e8d8fcb1db1f502b0086165e082e56eea758110ed70f0 = $this->env->getExtension("native_profiler");
        $__internal_b4cf3f4848f1c526f82e8d8fcb1db1f502b0086165e082e56eea758110ed70f0->enter($__internal_b4cf3f4848f1c526f82e8d8fcb1db1f502b0086165e082e56eea758110ed70f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "PMTPBundle:Default:form.html.twig");
        echo "

  <p>
    Vous éditez une nouvelle annonce.
  </p>

  <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

";
        
        $__internal_b4cf3f4848f1c526f82e8d8fcb1db1f502b0086165e082e56eea758110ed70f0->leave($__internal_b4cf3f4848f1c526f82e8d8fcb1db1f502b0086165e082e56eea758110ed70f0_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:add.html.twig";
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
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Ajouter un article</h2>*/
/* */
/*   {{ include("PMTPBundle:Default:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une nouvelle annonce.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('pm_tp_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
