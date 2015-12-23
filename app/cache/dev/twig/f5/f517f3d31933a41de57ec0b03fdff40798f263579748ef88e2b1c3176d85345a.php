<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_3ae4f57ae110384dd6d2c94154a2231bcd799a513e4c2d2bf5a6cabce1f17b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81fa7d9c3d850ee90536540be427436fa9c78d9dca9b5b925758ac92b8757c2e = $this->env->getExtension("native_profiler");
        $__internal_81fa7d9c3d850ee90536540be427436fa9c78d9dca9b5b925758ac92b8757c2e->enter($__internal_81fa7d9c3d850ee90536540be427436fa9c78d9dca9b5b925758ac92b8757c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fa7d9c3d850ee90536540be427436fa9c78d9dca9b5b925758ac92b8757c2e->leave($__internal_81fa7d9c3d850ee90536540be427436fa9c78d9dca9b5b925758ac92b8757c2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6487a8e35948fbf941c96d1dfa0d1a13f6666ca7319656992dcd34a514ecdc15 = $this->env->getExtension("native_profiler");
        $__internal_6487a8e35948fbf941c96d1dfa0d1a13f6666ca7319656992dcd34a514ecdc15->enter($__internal_6487a8e35948fbf941c96d1dfa0d1a13f6666ca7319656992dcd34a514ecdc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6487a8e35948fbf941c96d1dfa0d1a13f6666ca7319656992dcd34a514ecdc15->leave($__internal_6487a8e35948fbf941c96d1dfa0d1a13f6666ca7319656992dcd34a514ecdc15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f4b759e16eb1d29b7d818ab5ea377d113afe3c182c71588549be99df6450bef = $this->env->getExtension("native_profiler");
        $__internal_4f4b759e16eb1d29b7d818ab5ea377d113afe3c182c71588549be99df6450bef->enter($__internal_4f4b759e16eb1d29b7d818ab5ea377d113afe3c182c71588549be99df6450bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4f4b759e16eb1d29b7d818ab5ea377d113afe3c182c71588549be99df6450bef->leave($__internal_4f4b759e16eb1d29b7d818ab5ea377d113afe3c182c71588549be99df6450bef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a672e4f7876c97502bd50c277b3e6aa883d5f0e863c4988cd014c65d4f5044 = $this->env->getExtension("native_profiler");
        $__internal_71a672e4f7876c97502bd50c277b3e6aa883d5f0e863c4988cd014c65d4f5044->enter($__internal_71a672e4f7876c97502bd50c277b3e6aa883d5f0e863c4988cd014c65d4f5044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_71a672e4f7876c97502bd50c277b3e6aa883d5f0e863c4988cd014c65d4f5044->leave($__internal_71a672e4f7876c97502bd50c277b3e6aa883d5f0e863c4988cd014c65d4f5044_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b82254bd6286e84bc5c8b5d4383294775a809affa9664d519f5e7138f93ac6f = $this->env->getExtension("native_profiler");
        $__internal_2b82254bd6286e84bc5c8b5d4383294775a809affa9664d519f5e7138f93ac6f->enter($__internal_2b82254bd6286e84bc5c8b5d4383294775a809affa9664d519f5e7138f93ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2b82254bd6286e84bc5c8b5d4383294775a809affa9664d519f5e7138f93ac6f->leave($__internal_2b82254bd6286e84bc5c8b5d4383294775a809affa9664d519f5e7138f93ac6f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
