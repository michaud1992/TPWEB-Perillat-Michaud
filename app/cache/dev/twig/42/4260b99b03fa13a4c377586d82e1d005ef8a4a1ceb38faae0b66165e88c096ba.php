<?php

/* PMTPBundle:Default:edit.html.twig */
class __TwigTemplate_0e22366baba16ec959c52afb7c616278b87f3fd4b45a1bbcc1271aa5b35e1d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:edit.html.twig", 1);
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
        $__internal_5afa71da26b7381b086466250b1496cd9ea6c40852c57424356c057c58792888 = $this->env->getExtension("native_profiler");
        $__internal_5afa71da26b7381b086466250b1496cd9ea6c40852c57424356c057c58792888->enter($__internal_5afa71da26b7381b086466250b1496cd9ea6c40852c57424356c057c58792888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5afa71da26b7381b086466250b1496cd9ea6c40852c57424356c057c58792888->leave($__internal_5afa71da26b7381b086466250b1496cd9ea6c40852c57424356c057c58792888_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d8d9944df74b26d92c16cdaf344d76d2a8aab6553d93560fbe5235bbad6099 = $this->env->getExtension("native_profiler");
        $__internal_b5d8d9944df74b26d92c16cdaf344d76d2a8aab6553d93560fbe5235bbad6099->enter($__internal_b5d8d9944df74b26d92c16cdaf344d76d2a8aab6553d93560fbe5235bbad6099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5d8d9944df74b26d92c16cdaf344d76d2a8aab6553d93560fbe5235bbad6099->leave($__internal_b5d8d9944df74b26d92c16cdaf344d76d2a8aab6553d93560fbe5235bbad6099_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_c24213699c1f7392fb1914cd4cb8be8a0ab66d83225884c93643750976988f19 = $this->env->getExtension("native_profiler");
        $__internal_c24213699c1f7392fb1914cd4cb8be8a0ab66d83225884c93643750976988f19->enter($__internal_c24213699c1f7392fb1914cd4cb8be8a0ab66d83225884c93643750976988f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Modifier une article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "PMTPBundle:Default:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_view", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
        
        $__internal_c24213699c1f7392fb1914cd4cb8be8a0ab66d83225884c93643750976988f19->leave($__internal_c24213699c1f7392fb1914cd4cb8be8a0ab66d83225884c93643750976988f19_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:edit.html.twig";
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
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Modifier une article</h2>*/
/* */
/*   {{ include("PMTPBundle:Default:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('pm_tp_view', {'id': id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
