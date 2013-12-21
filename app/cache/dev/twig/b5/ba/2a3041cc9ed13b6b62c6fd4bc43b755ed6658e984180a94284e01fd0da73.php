<?php

/* DavidBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_b5ba2a3041cc9ed13b6b62c6fd4bc43b755ed6658e984180a94284e01fd0da73 extends Twig_Template
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
        // line 2
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("david_blog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  102 => 27,  99 => 26,  92 => 7,  89 => 6,  83 => 5,  77 => 41,  75 => 36,  65 => 28,  63 => 26,  48 => 20,  35 => 9,  23 => 1,  57 => 23,  52 => 21,  49 => 12,  45 => 9,  43 => 8,  40 => 9,  33 => 6,  30 => 3,  79 => 18,  72 => 16,  64 => 13,  60 => 13,  54 => 11,  51 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 7,);
    }
}
