<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "  </head>
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2</p>
      </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"span4\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("david_blog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("david_blog_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>                    
          ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DavidBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span8\">
          ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        </div>
      </div>
      <hr>
      <footer>
        <p>Le site test de david moaté via Synfony</p>
      </footer>
    </div>

  ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "David";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "          ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        // line 38
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
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
        return array (  114 => 39,  111 => 38,  109 => 37,  106 => 36,  102 => 27,  99 => 26,  92 => 7,  89 => 6,  83 => 5,  77 => 41,  75 => 36,  65 => 28,  63 => 26,  57 => 23,  52 => 21,  48 => 20,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
