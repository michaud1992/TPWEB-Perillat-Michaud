<?php

/* APBPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_49755bc88d719510bed542b64c817ee0cda944cda2c93d071480f0a30533a7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APBPlatformBundle::layout.html.twig", "APBPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_1328080cc10aa1011b3a088b122c5f5c3dd5b0f1da244946ceb29f747aae94c4 = $this->env->getExtension("native_profiler");
        $__internal_1328080cc10aa1011b3a088b122c5f5c3dd5b0f1da244946ceb29f747aae94c4->enter($__internal_1328080cc10aa1011b3a088b122c5f5c3dd5b0f1da244946ceb29f747aae94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1328080cc10aa1011b3a088b122c5f5c3dd5b0f1da244946ceb29f747aae94c4->leave($__internal_1328080cc10aa1011b3a088b122c5f5c3dd5b0f1da244946ceb29f747aae94c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_751657457f107dfc87354399083d6b29898c49b46541ca17c76fec374e903244 = $this->env->getExtension("native_profiler");
        $__internal_751657457f107dfc87354399083d6b29898c49b46541ca17c76fec374e903244->enter($__internal_751657457f107dfc87354399083d6b29898c49b46541ca17c76fec374e903244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_751657457f107dfc87354399083d6b29898c49b46541ca17c76fec374e903244->leave($__internal_751657457f107dfc87354399083d6b29898c49b46541ca17c76fec374e903244_prof);

    }

    // line 7
    public function block_apbplatform_body($context, array $blocks = array())
    {
        $__internal_bcfbf48914c9ad0f1a507cb38b43a8c5d0c43ab768131617a647b5a47013a62b = $this->env->getExtension("native_profiler");
        $__internal_bcfbf48914c9ad0f1a507cb38b43a8c5d0c43ab768131617a647b5a47013a62b->enter($__internal_bcfbf48914c9ad0f1a507cb38b43a8c5d0c43ab768131617a647b5a47013a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apbplatform_body"));

        // line 8
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apb_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

";
        
        $__internal_bcfbf48914c9ad0f1a507cb38b43a8c5d0c43ab768131617a647b5a47013a62b->leave($__internal_bcfbf48914c9ad0f1a507cb38b43a8c5d0c43ab768131617a647b5a47013a62b_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  92 => 21,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "APBPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block apbplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('apb_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
