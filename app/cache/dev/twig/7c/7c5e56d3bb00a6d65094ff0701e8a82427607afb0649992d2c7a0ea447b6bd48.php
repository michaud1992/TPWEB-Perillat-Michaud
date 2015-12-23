<?php

/* APBPlatformBundle::layout.html.twig */
class __TwigTemplate_94eaa9ba2b61bdbd9da5d29dab3e0623a5dc66476a333d68dc98b42328ffb8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "APBPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'apbplatform_body' => array($this, 'block_apbplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78354b0a8c0114823c7dc5766e087346bf47d586a514f6509313d6203cd475f2 = $this->env->getExtension("native_profiler");
        $__internal_78354b0a8c0114823c7dc5766e087346bf47d586a514f6509313d6203cd475f2->enter($__internal_78354b0a8c0114823c7dc5766e087346bf47d586a514f6509313d6203cd475f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78354b0a8c0114823c7dc5766e087346bf47d586a514f6509313d6203cd475f2->leave($__internal_78354b0a8c0114823c7dc5766e087346bf47d586a514f6509313d6203cd475f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d421ec6b8f195e66a3dc04054589776ea4a81b58028eac5e05c4cf1ab8b2f764 = $this->env->getExtension("native_profiler");
        $__internal_d421ec6b8f195e66a3dc04054589776ea4a81b58028eac5e05c4cf1ab8b2f764->enter($__internal_d421ec6b8f195e66a3dc04054589776ea4a81b58028eac5e05c4cf1ab8b2f764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d421ec6b8f195e66a3dc04054589776ea4a81b58028eac5e05c4cf1ab8b2f764->leave($__internal_d421ec6b8f195e66a3dc04054589776ea4a81b58028eac5e05c4cf1ab8b2f764_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_da83c6037cf031f4d802c395a59a84f14a6b07d42cc75b9c9c666194cf93cd52 = $this->env->getExtension("native_profiler");
        $__internal_da83c6037cf031f4d802c395a59a84f14a6b07d42cc75b9c9c666194cf93cd52->enter($__internal_da83c6037cf031f4d802c395a59a84f14a6b07d42cc75b9c9c666194cf93cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
 <h1>Annonces</h1>

  <hr>

  ";
        // line 13
        $this->displayBlock('apbplatform_body', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_da83c6037cf031f4d802c395a59a84f14a6b07d42cc75b9c9c666194cf93cd52->leave($__internal_da83c6037cf031f4d802c395a59a84f14a6b07d42cc75b9c9c666194cf93cd52_prof);

    }

    // line 13
    public function block_apbplatform_body($context, array $blocks = array())
    {
        $__internal_13661651eeff3ea27e1177c7058bb8d1a9207ebc987e33ca1f91dc1b8e3ccbbe = $this->env->getExtension("native_profiler");
        $__internal_13661651eeff3ea27e1177c7058bb8d1a9207ebc987e33ca1f91dc1b8e3ccbbe->enter($__internal_13661651eeff3ea27e1177c7058bb8d1a9207ebc987e33ca1f91dc1b8e3ccbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apbplatform_body"));

        // line 14
        echo "  ";
        
        $__internal_13661651eeff3ea27e1177c7058bb8d1a9207ebc987e33ca1f91dc1b8e3ccbbe->leave($__internal_13661651eeff3ea27e1177c7058bb8d1a9207ebc987e33ca1f91dc1b8e3ccbbe_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  67 => 15,  65 => 13,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {% block apbplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
