<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_200640c764d7416670de435e36a606700ec40f33dd24c86e3784bd9e83bbf84c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fea7e732bfd8ffcfa455bc5def060a6fbcf0a82ae9aa8af1e210b9914b41bfd3 = $this->env->getExtension("native_profiler");
        $__internal_fea7e732bfd8ffcfa455bc5def060a6fbcf0a82ae9aa8af1e210b9914b41bfd3->enter($__internal_fea7e732bfd8ffcfa455bc5def060a6fbcf0a82ae9aa8af1e210b9914b41bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea7e732bfd8ffcfa455bc5def060a6fbcf0a82ae9aa8af1e210b9914b41bfd3->leave($__internal_fea7e732bfd8ffcfa455bc5def060a6fbcf0a82ae9aa8af1e210b9914b41bfd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fb3395c02ea4f766571e9c3744ba138e9c359126c2b8c1ca7a0a60a2226b4ac = $this->env->getExtension("native_profiler");
        $__internal_3fb3395c02ea4f766571e9c3744ba138e9c359126c2b8c1ca7a0a60a2226b4ac->enter($__internal_3fb3395c02ea4f766571e9c3744ba138e9c359126c2b8c1ca7a0a60a2226b4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3fb3395c02ea4f766571e9c3744ba138e9c359126c2b8c1ca7a0a60a2226b4ac->leave($__internal_3fb3395c02ea4f766571e9c3744ba138e9c359126c2b8c1ca7a0a60a2226b4ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3d3092f681f6eedb9f8f188bcf4ea8987071e9c0256caecf5dadcc3991a39f9 = $this->env->getExtension("native_profiler");
        $__internal_c3d3092f681f6eedb9f8f188bcf4ea8987071e9c0256caecf5dadcc3991a39f9->enter($__internal_c3d3092f681f6eedb9f8f188bcf4ea8987071e9c0256caecf5dadcc3991a39f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c3d3092f681f6eedb9f8f188bcf4ea8987071e9c0256caecf5dadcc3991a39f9->leave($__internal_c3d3092f681f6eedb9f8f188bcf4ea8987071e9c0256caecf5dadcc3991a39f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
