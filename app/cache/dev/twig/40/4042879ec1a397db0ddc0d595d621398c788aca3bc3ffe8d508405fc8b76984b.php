<?php

/* PMTPBundle:Default:view.html.twig */
class __TwigTemplate_81cf40bdb924105e35c05192b628219f043705c5521c38ac9b48d564ba7f88e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:view.html.twig", 1);
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
        $__internal_637e5cf13f344eed52098fdb335ca1cf982689095b0fd2a5da54d168ca68d3f2 = $this->env->getExtension("native_profiler");
        $__internal_637e5cf13f344eed52098fdb335ca1cf982689095b0fd2a5da54d168ca68d3f2->enter($__internal_637e5cf13f344eed52098fdb335ca1cf982689095b0fd2a5da54d168ca68d3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637e5cf13f344eed52098fdb335ca1cf982689095b0fd2a5da54d168ca68d3f2->leave($__internal_637e5cf13f344eed52098fdb335ca1cf982689095b0fd2a5da54d168ca68d3f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0768bdd328638d4bbe9c7a45eab49ba69cc7d9313e6ca6f75c74f93f1e30dc = $this->env->getExtension("native_profiler");
        $__internal_8e0768bdd328638d4bbe9c7a45eab49ba69cc7d9313e6ca6f75c74f93f1e30dc->enter($__internal_8e0768bdd328638d4bbe9c7a45eab49ba69cc7d9313e6ca6f75c74f93f1e30dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e0768bdd328638d4bbe9c7a45eab49ba69cc7d9313e6ca6f75c74f93f1e30dc->leave($__internal_8e0768bdd328638d4bbe9c7a45eab49ba69cc7d9313e6ca6f75c74f93f1e30dc_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_4f2aafff4ad617acd363e93aa72fb36bd330d918db8fcb5a768d989bc433fbac = $this->env->getExtension("native_profiler");
        $__internal_4f2aafff4ad617acd363e93aa72fb36bd330d918db8fcb5a768d989bc433fbac->enter($__internal_4f2aafff4ad617acd363e93aa72fb36bd330d918db8fcb5a768d989bc433fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
        
        $__internal_4f2aafff4ad617acd363e93aa72fb36bd330d918db8fcb5a768d989bc433fbac->leave($__internal_4f2aafff4ad617acd363e93aa72fb36bd330d918db8fcb5a768d989bc433fbac_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  86 => 21,  79 => 17,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>{{ article.title }}</h2>*/
/*   <i>Par {{ article.author }}, le {{ article.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ article.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('pm_tp_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'accueil*/
/*     </a>*/
/*     <a href="{{ path('pm_tp_edit', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'article*/
/*     </a>*/
/*     <a href="{{ path('pm_tp_delete', {'id': article.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
