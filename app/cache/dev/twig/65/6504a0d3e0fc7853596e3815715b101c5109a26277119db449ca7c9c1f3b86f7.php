<?php

/* PMTPBundle::base.html.twig */
class __TwigTemplate_1f56553995efca6203f3b4800ecd44f78d7a6062da078a4dcadacb9f5bc2aacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PMTPBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'pmtp_body' => array($this, 'block_pmtp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15919a9c70f91ae4321c85883110ed9313a28ee44ff406ad0aa4271acf6e58a = $this->env->getExtension("native_profiler");
        $__internal_c15919a9c70f91ae4321c85883110ed9313a28ee44ff406ad0aa4271acf6e58a->enter($__internal_c15919a9c70f91ae4321c85883110ed9313a28ee44ff406ad0aa4271acf6e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PMTPBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15919a9c70f91ae4321c85883110ed9313a28ee44ff406ad0aa4271acf6e58a->leave($__internal_c15919a9c70f91ae4321c85883110ed9313a28ee44ff406ad0aa4271acf6e58a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d134ad60c98050ac0fb02ed3947645ea37cd6a771ffe17830e521e273a9be12 = $this->env->getExtension("native_profiler");
        $__internal_6d134ad60c98050ac0fb02ed3947645ea37cd6a771ffe17830e521e273a9be12->enter($__internal_6d134ad60c98050ac0fb02ed3947645ea37cd6a771ffe17830e521e273a9be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d134ad60c98050ac0fb02ed3947645ea37cd6a771ffe17830e521e273a9be12->leave($__internal_6d134ad60c98050ac0fb02ed3947645ea37cd6a771ffe17830e521e273a9be12_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b1e1e27a014e9fd03a4a820ec9761c0c8a9e6df4f96b3e18de33db17595ee0 = $this->env->getExtension("native_profiler");
        $__internal_d7b1e1e27a014e9fd03a4a820ec9761c0c8a9e6df4f96b3e18de33db17595ee0->enter($__internal_d7b1e1e27a014e9fd03a4a820ec9761c0c8a9e6df4f96b3e18de33db17595ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 9
        $this->displayBlock('pmtp_body', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_d7b1e1e27a014e9fd03a4a820ec9761c0c8a9e6df4f96b3e18de33db17595ee0->leave($__internal_d7b1e1e27a014e9fd03a4a820ec9761c0c8a9e6df4f96b3e18de33db17595ee0_prof);

    }

    // line 9
    public function block_pmtp_body($context, array $blocks = array())
    {
        $__internal_f970be5f3cc60fd3be3b8e904a8fce7a01befe8c62c37d5935c9841959b65b4c = $this->env->getExtension("native_profiler");
        $__internal_f970be5f3cc60fd3be3b8e904a8fce7a01befe8c62c37d5935c9841959b65b4c->enter($__internal_f970be5f3cc60fd3be3b8e904a8fce7a01befe8c62c37d5935c9841959b65b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pmtp_body"));

        // line 10
        echo "  ";
        
        $__internal_f970be5f3cc60fd3be3b8e904a8fce7a01befe8c62c37d5935c9841959b65b4c->leave($__internal_f970be5f3cc60fd3be3b8e904a8fce7a01befe8c62c37d5935c9841959b65b4c_prof);

    }

    public function getTemplateName()
    {
        return "PMTPBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  71 => 9,  63 => 11,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Blog - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {% block pmtp_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
