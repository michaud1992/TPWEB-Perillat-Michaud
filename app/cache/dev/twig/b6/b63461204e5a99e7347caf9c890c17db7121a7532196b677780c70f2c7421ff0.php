<?php

/* ::layout.html.twig */
class __TwigTemplate_fe99cd7bd8e95bd03a54e9181b1f4a886aced83ec67a682c41d54cbbfcc079e4 extends Twig_Template
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
        $__internal_86406f98de0dec088aed7afbeb442a6757b1c49884783174d7c7a23f8aaf3602 = $this->env->getExtension("native_profiler");
        $__internal_86406f98de0dec088aed7afbeb442a6757b1c49884783174d7c7a23f8aaf3602->enter($__internal_86406f98de0dec088aed7afbeb442a6757b1c49884783174d7c7a23f8aaf3602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("apb_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("apb_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("APBPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
</body>
</html>";
        
        $__internal_86406f98de0dec088aed7afbeb442a6757b1c49884783174d7c7a23f8aaf3602->leave($__internal_86406f98de0dec088aed7afbeb442a6757b1c49884783174d7c7a23f8aaf3602_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_315b932688897e2dfc4baee7c637989195559426a61dc92251b336c38ac7768f = $this->env->getExtension("native_profiler");
        $__internal_315b932688897e2dfc4baee7c637989195559426a61dc92251b336c38ac7768f->enter($__internal_315b932688897e2dfc4baee7c637989195559426a61dc92251b336c38ac7768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "APB Plateforme";
        
        $__internal_315b932688897e2dfc4baee7c637989195559426a61dc92251b336c38ac7768f->leave($__internal_315b932688897e2dfc4baee7c637989195559426a61dc92251b336c38ac7768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a398052f7b606950cddf68e6f699ae51166a5929602dadd91c1d33fa16019cdc = $this->env->getExtension("native_profiler");
        $__internal_a398052f7b606950cddf68e6f699ae51166a5929602dadd91c1d33fa16019cdc->enter($__internal_a398052f7b606950cddf68e6f699ae51166a5929602dadd91c1d33fa16019cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_a398052f7b606950cddf68e6f699ae51166a5929602dadd91c1d33fa16019cdc->leave($__internal_a398052f7b606950cddf68e6f699ae51166a5929602dadd91c1d33fa16019cdc_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_86e6cf94f83d22e49e0eac32f19d4c21a3a2ab0f9fc1aff29c1de7b0df87146e = $this->env->getExtension("native_profiler");
        $__internal_86e6cf94f83d22e49e0eac32f19d4c21a3a2ab0f9fc1aff29c1de7b0df87146e->enter($__internal_86e6cf94f83d22e49e0eac32f19d4c21a3a2ab0f9fc1aff29c1de7b0df87146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "        ";
        
        $__internal_86e6cf94f83d22e49e0eac32f19d4c21a3a2ab0f9fc1aff29c1de7b0df87146e->leave($__internal_86e6cf94f83d22e49e0eac32f19d4c21a3a2ab0f9fc1aff29c1de7b0df87146e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_547fe48fa4ae9260e88b2ff24815947145301dd848a4bd51f6948e13740a29e7 = $this->env->getExtension("native_profiler");
        $__internal_547fe48fa4ae9260e88b2ff24815947145301dd848a4bd51f6948e13740a29e7->enter($__internal_547fe48fa4ae9260e88b2ff24815947145301dd848a4bd51f6948e13740a29e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_547fe48fa4ae9260e88b2ff24815947145301dd848a4bd51f6948e13740a29e7->leave($__internal_547fe48fa4ae9260e88b2ff24815947145301dd848a4bd51f6948e13740a29e7_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 55,  149 => 54,  142 => 43,  136 => 42,  127 => 10,  121 => 9,  109 => 7,  100 => 58,  98 => 54,  91 => 50,  83 => 44,  81 => 42,  75 => 39,  68 => 35,  64 => 34,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}APB Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony2,*/
/*         et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('apb_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('apb_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("APBPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
