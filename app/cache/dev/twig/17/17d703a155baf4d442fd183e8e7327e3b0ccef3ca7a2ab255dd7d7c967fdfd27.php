<?php

/* base.html.twig */
class __TwigTemplate_3173f840765bb18cf67979bfbd8b5eaed049d0cc57de63475fd54480509486e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8f7f654cf262601af15f4d88a782bbbff22bded49112287f66dc4e61abbd917 = $this->env->getExtension("native_profiler");
        $__internal_b8f7f654cf262601af15f4d88a782bbbff22bded49112287f66dc4e61abbd917->enter($__internal_b8f7f654cf262601af15f4d88a782bbbff22bded49112287f66dc4e61abbd917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b8f7f654cf262601af15f4d88a782bbbff22bded49112287f66dc4e61abbd917->leave($__internal_b8f7f654cf262601af15f4d88a782bbbff22bded49112287f66dc4e61abbd917_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b9b117386925afba2b8deac8b3363e838ba24b58daeaab58e49142044f63a4 = $this->env->getExtension("native_profiler");
        $__internal_f1b9b117386925afba2b8deac8b3363e838ba24b58daeaab58e49142044f63a4->enter($__internal_f1b9b117386925afba2b8deac8b3363e838ba24b58daeaab58e49142044f63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1b9b117386925afba2b8deac8b3363e838ba24b58daeaab58e49142044f63a4->leave($__internal_f1b9b117386925afba2b8deac8b3363e838ba24b58daeaab58e49142044f63a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a753faff56429ffe407a3eb8753f65593b1a4ce44f44e8afa83914bdf979a4b5 = $this->env->getExtension("native_profiler");
        $__internal_a753faff56429ffe407a3eb8753f65593b1a4ce44f44e8afa83914bdf979a4b5->enter($__internal_a753faff56429ffe407a3eb8753f65593b1a4ce44f44e8afa83914bdf979a4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a753faff56429ffe407a3eb8753f65593b1a4ce44f44e8afa83914bdf979a4b5->leave($__internal_a753faff56429ffe407a3eb8753f65593b1a4ce44f44e8afa83914bdf979a4b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_09c218b94c26417712ab720deb247308835f1b42f6708d79623947986af24b7e = $this->env->getExtension("native_profiler");
        $__internal_09c218b94c26417712ab720deb247308835f1b42f6708d79623947986af24b7e->enter($__internal_09c218b94c26417712ab720deb247308835f1b42f6708d79623947986af24b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09c218b94c26417712ab720deb247308835f1b42f6708d79623947986af24b7e->leave($__internal_09c218b94c26417712ab720deb247308835f1b42f6708d79623947986af24b7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a080de47a1d10f27f0ee4dbffaaf1e6335dd9d70b3c32bcb2cb393979047906 = $this->env->getExtension("native_profiler");
        $__internal_0a080de47a1d10f27f0ee4dbffaaf1e6335dd9d70b3c32bcb2cb393979047906->enter($__internal_0a080de47a1d10f27f0ee4dbffaaf1e6335dd9d70b3c32bcb2cb393979047906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0a080de47a1d10f27f0ee4dbffaaf1e6335dd9d70b3c32bcb2cb393979047906->leave($__internal_0a080de47a1d10f27f0ee4dbffaaf1e6335dd9d70b3c32bcb2cb393979047906_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
