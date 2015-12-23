<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_76c6f2bb5a9c7698e7f444c5f8d98f48ba25c58650757d1fcc8a01464b44f2cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0079f587e7032bdb6dbd72838287fceed8515168865b838e918abdbb526e3e45 = $this->env->getExtension("native_profiler");
        $__internal_0079f587e7032bdb6dbd72838287fceed8515168865b838e918abdbb526e3e45->enter($__internal_0079f587e7032bdb6dbd72838287fceed8515168865b838e918abdbb526e3e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0079f587e7032bdb6dbd72838287fceed8515168865b838e918abdbb526e3e45->leave($__internal_0079f587e7032bdb6dbd72838287fceed8515168865b838e918abdbb526e3e45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64828fea8862c85990bf50cbd54baa4f644bb6951a913ebe8333a2455bb338f6 = $this->env->getExtension("native_profiler");
        $__internal_64828fea8862c85990bf50cbd54baa4f644bb6951a913ebe8333a2455bb338f6->enter($__internal_64828fea8862c85990bf50cbd54baa4f644bb6951a913ebe8333a2455bb338f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64828fea8862c85990bf50cbd54baa4f644bb6951a913ebe8333a2455bb338f6->leave($__internal_64828fea8862c85990bf50cbd54baa4f644bb6951a913ebe8333a2455bb338f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
