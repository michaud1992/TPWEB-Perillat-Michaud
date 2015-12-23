<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f8a5367dd7df456f6f958fc1edb3cc21f4550d4d1659a2532e2f9a1bd3692a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a0ce71e55356250a422c4059eb942f77a808c1a5425914b69c57aea183408c05 = $this->env->getExtension("native_profiler");
        $__internal_a0ce71e55356250a422c4059eb942f77a808c1a5425914b69c57aea183408c05->enter($__internal_a0ce71e55356250a422c4059eb942f77a808c1a5425914b69c57aea183408c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ce71e55356250a422c4059eb942f77a808c1a5425914b69c57aea183408c05->leave($__internal_a0ce71e55356250a422c4059eb942f77a808c1a5425914b69c57aea183408c05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_841f0f1a2452e4789b29f996b9fbd7519f39c5b227b241e4de6641c7de96250c = $this->env->getExtension("native_profiler");
        $__internal_841f0f1a2452e4789b29f996b9fbd7519f39c5b227b241e4de6641c7de96250c->enter($__internal_841f0f1a2452e4789b29f996b9fbd7519f39c5b227b241e4de6641c7de96250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_841f0f1a2452e4789b29f996b9fbd7519f39c5b227b241e4de6641c7de96250c->leave($__internal_841f0f1a2452e4789b29f996b9fbd7519f39c5b227b241e4de6641c7de96250c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c2b6f50916d52580d0fbc30733780773ac3df566b551c9ce025e8f4c4892890 = $this->env->getExtension("native_profiler");
        $__internal_2c2b6f50916d52580d0fbc30733780773ac3df566b551c9ce025e8f4c4892890->enter($__internal_2c2b6f50916d52580d0fbc30733780773ac3df566b551c9ce025e8f4c4892890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c2b6f50916d52580d0fbc30733780773ac3df566b551c9ce025e8f4c4892890->leave($__internal_2c2b6f50916d52580d0fbc30733780773ac3df566b551c9ce025e8f4c4892890_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbf5273ca1b6f2f6b673efd27ade30b663ef0c0a37d1228b36ae428754d1ee30 = $this->env->getExtension("native_profiler");
        $__internal_fbf5273ca1b6f2f6b673efd27ade30b663ef0c0a37d1228b36ae428754d1ee30->enter($__internal_fbf5273ca1b6f2f6b673efd27ade30b663ef0c0a37d1228b36ae428754d1ee30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fbf5273ca1b6f2f6b673efd27ade30b663ef0c0a37d1228b36ae428754d1ee30->leave($__internal_fbf5273ca1b6f2f6b673efd27ade30b663ef0c0a37d1228b36ae428754d1ee30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
