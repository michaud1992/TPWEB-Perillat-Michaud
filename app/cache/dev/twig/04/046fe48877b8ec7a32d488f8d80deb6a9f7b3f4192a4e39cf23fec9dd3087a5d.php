<?php

/* PMTPBundle:Default:index.html.twig */
class __TwigTemplate_d6c93e7ab27fdf180118826927d81749568aca476d08a5e5cd4393876a5e3aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PMTPBundle::base.html.twig", "PMTPBundle:Default:index.html.twig", 1);
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
        $__internal_7375c8d4f8d4c89b1c8c17de415143af3a28b774335751d8664bb43826a4eccb = $this->env->getExtension("native_profiler");
        $__internal_7375c8d4f8d4c89b1c8c17de415143af3a28b774335751d8664bb43826a4eccb->enter($__internal_7375c8d4f8d4c89b1c8c17de415143af3a28b774335751d8664bb43826a4eccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7375c8d4f8d4c89b1c8c17de415143af3a28b774335751d8664bb43826a4eccb->leave($__internal_7375c8d4f8d4c89b1c8c17de415143af3a28b774335751d8664bb43826a4eccb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9caa55653d012f3ad63fc5969a4fee6536f5f1f37a002f476301edc3e81c07bc = $this->env->getExtension("native_profiler");
        $__internal_9caa55653d012f3ad63fc5969a4fee6536f5f1f37a002f476301edc3e81c07bc->enter($__internal_9caa55653d012f3ad63fc5969a4fee6536f5f1f37a002f476301edc3e81c07bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9caa55653d012f3ad63fc5969a4fee6536f5f1f37a002f476301edc3e81c07bc->leave($__internal_9caa55653d012f3ad63fc5969a4fee6536f5f1f37a002f476301edc3e81c07bc_prof);

    }

    // line 7
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_2ebbcc9d21c0c1cf7dbedf018a1907ff33fa312e888c2dfee7215abb14317882 = $this->env->getExtension("native_profiler");
        $__internal_2ebbcc9d21c0c1cf7dbedf018a1907ff33fa312e888c2dfee7215abb14317882->enter($__internal_2ebbcc9d21c0c1cf7dbedf018a1907ff33fa312e888c2dfee7215abb14317882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 8
        echo "
  <h2>Liste des articles</h2>
 \t
  <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_tp_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>
";
        
        $__internal_2ebbcc9d21c0c1cf7dbedf018a1907ff33fa312e888c2dfee7215abb14317882->leave($__internal_2ebbcc9d21c0c1cf7dbedf018a1907ff33fa312e888c2dfee7215abb14317882_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle:Default:index.html.twig";
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
/* {% extends "PMTPBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pmtp_body %}*/
/* */
/*   <h2>Liste des articles</h2>*/
/*  	*/
/*   <ul>*/
/*     {% for article in listArticles %}*/
/*       <li>*/
/*         <a href="{{ path('pm_tp_view', {'id': article.id}) }}">*/
/*           {{ article.title }}*/
/*         </a>*/
/*         par {{ article.author }},*/
/*         le {{ article.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endblock %}*/
/* */
