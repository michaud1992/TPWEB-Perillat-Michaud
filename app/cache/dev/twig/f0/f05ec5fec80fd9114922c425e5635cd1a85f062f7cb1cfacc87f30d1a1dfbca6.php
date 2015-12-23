<?php

/* APBPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_b171a952f16336f4777c50515329d655bf08304b644c7d974592dee1300d304f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APBPlatformBundle::layout.html.twig", "APBPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_c5e39d645f3cbb1ef6c6dc941f6fd7817efb1660f685b745b2e2d1c45a35ffd2 = $this->env->getExtension("native_profiler");
        $__internal_c5e39d645f3cbb1ef6c6dc941f6fd7817efb1660f685b745b2e2d1c45a35ffd2->enter($__internal_c5e39d645f3cbb1ef6c6dc941f6fd7817efb1660f685b745b2e2d1c45a35ffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e39d645f3cbb1ef6c6dc941f6fd7817efb1660f685b745b2e2d1c45a35ffd2->leave($__internal_c5e39d645f3cbb1ef6c6dc941f6fd7817efb1660f685b745b2e2d1c45a35ffd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a0447e5eb26f66578351ff3c0b031ad64915d9f9e5fb27d3552e675490d3aed = $this->env->getExtension("native_profiler");
        $__internal_4a0447e5eb26f66578351ff3c0b031ad64915d9f9e5fb27d3552e675490d3aed->enter($__internal_4a0447e5eb26f66578351ff3c0b031ad64915d9f9e5fb27d3552e675490d3aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4a0447e5eb26f66578351ff3c0b031ad64915d9f9e5fb27d3552e675490d3aed->leave($__internal_4a0447e5eb26f66578351ff3c0b031ad64915d9f9e5fb27d3552e675490d3aed_prof);

    }

    // line 7
    public function block_apbplatform_body($context, array $blocks = array())
    {
        $__internal_000e62eee85c342cd2a0d380bc542beff16a7b8ba05b57d8b7a1d4a389aad50e = $this->env->getExtension("native_profiler");
        $__internal_000e62eee85c342cd2a0d380bc542beff16a7b8ba05b57d8b7a1d4a389aad50e->enter($__internal_000e62eee85c342cd2a0d380bc542beff16a7b8ba05b57d8b7a1d4a389aad50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apbplatform_body"));

        // line 8
        echo "
  <div>
  ";
        // line 10
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 11
            echo "\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
  ";
        }
        // line 13
        echo "  </div>
  <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>
  
  ";
        // line 21
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 22
            echo "  <p>
    Cette annonce est parue dans les catégories suivantes :
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "   </p>
  ";
        }
        // line 29
        echo "  
  <ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 32
            echo "      <li>
       <h2>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "author", array()), "html", null, true);
            echo "</h2>
\t   <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
            echo "</p>
\t   <i>le ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </ul>

  <p>
    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("apb_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apb_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apb_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_000e62eee85c342cd2a0d380bc542beff16a7b8ba05b57d8b7a1d4a389aad50e->leave($__internal_000e62eee85c342cd2a0d380bc542beff16a7b8ba05b57d8b7a1d4a389aad50e_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 49,  179 => 45,  172 => 41,  167 => 38,  158 => 35,  154 => 34,  150 => 33,  147 => 32,  143 => 31,  139 => 29,  135 => 27,  121 => 26,  115 => 25,  98 => 24,  94 => 22,  92 => 21,  86 => 18,  78 => 15,  74 => 14,  71 => 13,  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "APBPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block apbplatform_body %}*/
/* */
/*   <div>*/
/*   {% if advert.image is not null %}*/
/* 	<img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}">*/
/*   {% endif %}*/
/*   </div>*/
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/*   */
/*   {% if not advert.categories.empty %}*/
/*   <p>*/
/*     Cette annonce est parue dans les catégories suivantes :*/
/*     {% for category in advert.categories %}*/
/*       {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*     {% endfor %}*/
/*    </p>*/
/*   {% endif %}*/
/*   */
/*   <ul class="nav nav-pills nav-stacked">*/
/*   {% for application in listApplications %}*/
/*       <li>*/
/*        <h2>{{ application.author }}</h2>*/
/* 	   <p>{{ application.content }}</p>*/
/* 	   <i>le {{ application.date|date('d/m/Y') }}</i>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <p>*/
/*     <a href="{{ path('apb_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('apb_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('apb_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
