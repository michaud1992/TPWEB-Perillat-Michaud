<?php

/* ::base.html.twig */
class __TwigTemplate_8a310cb1cf7b9c2e290e4088c6aa42147186810ba8878c0a6decac1ecfd5f258 extends Twig_Template
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
        $__internal_032f44b086da9193e4d038e427d54fcb28ee1dc8df736f647ff4abc3c0b732d8 = $this->env->getExtension("native_profiler");
        $__internal_032f44b086da9193e4d038e427d54fcb28ee1dc8df736f647ff4abc3c0b732d8->enter($__internal_032f44b086da9193e4d038e427d54fcb28ee1dc8df736f647ff4abc3c0b732d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
      <h1>Projet web 4A</h1>
\t  <p>Développé par: Aurélien Perillat et Nicolas Michaud</p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les articles</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("pm_tp_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pm_tp_add");
        echo "\">Ajouter un article</a></li>
        </ul>

        <h4>Articles les plus commentés</h4>
        
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "      </div>
    </div>
  </div>

  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
</body>
</html>";
        
        $__internal_032f44b086da9193e4d038e427d54fcb28ee1dc8df736f647ff4abc3c0b732d8->leave($__internal_032f44b086da9193e4d038e427d54fcb28ee1dc8df736f647ff4abc3c0b732d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd250a18fb8610941bc2d0624e445d6b745e10ef4ad4fa5e316c33894045f65c = $this->env->getExtension("native_profiler");
        $__internal_fd250a18fb8610941bc2d0624e445d6b745e10ef4ad4fa5e316c33894045f65c->enter($__internal_fd250a18fb8610941bc2d0624e445d6b745e10ef4ad4fa5e316c33894045f65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web 4A";
        
        $__internal_fd250a18fb8610941bc2d0624e445d6b745e10ef4ad4fa5e316c33894045f65c->leave($__internal_fd250a18fb8610941bc2d0624e445d6b745e10ef4ad4fa5e316c33894045f65c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e13b43f3c42a3ae8a1865c9155e39aaa82e936c68a1e6d9b745885f646ebbe3 = $this->env->getExtension("native_profiler");
        $__internal_2e13b43f3c42a3ae8a1865c9155e39aaa82e936c68a1e6d9b745885f646ebbe3->enter($__internal_2e13b43f3c42a3ae8a1865c9155e39aaa82e936c68a1e6d9b745885f646ebbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_2e13b43f3c42a3ae8a1865c9155e39aaa82e936c68a1e6d9b745885f646ebbe3->leave($__internal_2e13b43f3c42a3ae8a1865c9155e39aaa82e936c68a1e6d9b745885f646ebbe3_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_01817a2a0988bf2dade37f008eace264eab38eb87128836a787185f8edfdfd29 = $this->env->getExtension("native_profiler");
        $__internal_01817a2a0988bf2dade37f008eace264eab38eb87128836a787185f8edfdfd29->enter($__internal_01817a2a0988bf2dade37f008eace264eab38eb87128836a787185f8edfdfd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "        ";
        
        $__internal_01817a2a0988bf2dade37f008eace264eab38eb87128836a787185f8edfdfd29->leave($__internal_01817a2a0988bf2dade37f008eace264eab38eb87128836a787185f8edfdfd29_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63fe8d0756ea26a667892443c133634a01feb8d28570b1e1ec352644a24a077b = $this->env->getExtension("native_profiler");
        $__internal_63fe8d0756ea26a667892443c133634a01feb8d28570b1e1ec352644a24a077b->enter($__internal_63fe8d0756ea26a667892443c133634a01feb8d28570b1e1ec352644a24a077b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_63fe8d0756ea26a667892443c133634a01feb8d28570b1e1ec352644a24a077b->leave($__internal_63fe8d0756ea26a667892443c133634a01feb8d28570b1e1ec352644a24a077b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  129 => 40,  122 => 35,  116 => 34,  107 => 10,  101 => 9,  89 => 7,  80 => 44,  78 => 40,  72 => 36,  70 => 34,  60 => 27,  56 => 26,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Web 4A{% endblock %}</title>*/
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
/*       <h1>Projet web 4A</h1>*/
/* 	  <p>Développé par: Aurélien Perillat et Nicolas Michaud</p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les articles</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('pm_tp_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('pm_tp_add') }}">Ajouter un article</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Articles les plus commentés</h4>*/
/*         */
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
