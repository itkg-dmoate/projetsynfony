<?php

/* DavidBlogBundle::layout.html.twig */
class __TwigTemplate_c0ef9ff6e3874a52e4531df0658f37f7e935aedd15072692023fa006cbde1146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'blog_body' => array($this, 'block_blog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        // line 9
        echo "  <h1>Blog</h1>
  <hr>
  ";
        // line 12
        echo "  ";
        $this->displayBlock('blog_body', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 12
    public function block_blog_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  52 => 14,  49 => 12,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  79 => 18,  72 => 16,  64 => 13,  60 => 13,  54 => 11,  51 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
