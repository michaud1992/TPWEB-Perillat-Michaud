<?php

/* APBPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_ae7f0e0353dd7450034a8f93cc8f54aa772d73354378b569a0d908fcf1cace79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c306091d4e927bf236eec5b88fc0b420c9ff8a62813273bfb64c8dce4fb485 = $this->env->getExtension("native_profiler");
        $__internal_01c306091d4e927bf236eec5b88fc0b420c9ff8a62813273bfb64c8dce4fb485->enter($__internal_01c306091d4e927bf236eec5b88fc0b420c9ff8a62813273bfb64c8dce4fb485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APBPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "    <li>
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apb_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
        
        $__internal_01c306091d4e927bf236eec5b88fc0b420c9ff8a62813273bfb64c8dce4fb485->leave($__internal_01c306091d4e927bf236eec5b88fc0b420c9ff8a62813273bfb64c8dce4fb485_prof);

    }

    public function getTemplateName()
    {
        return "APBPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('apb_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
