<?php

/* BatnaArchiSiebelBundle::layout.html.twig */
class __TwigTemplate_dafeb3515ddaed97edf9da42edf1ef28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'batnaarchi_body' => array($this, 'block_batnaarchi_body'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Archi Siebel - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Architecture Siebel</h1>

        ";
        // line 8
        $this->displayBlock('batnaarchi_body', $context, $blocks);
        // line 10
        echo "\t<div style=\"height:300px\">&nbsp;</div>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
