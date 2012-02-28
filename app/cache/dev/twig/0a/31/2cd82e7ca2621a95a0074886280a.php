<?php

/* BatnaArchiSiebelBundle:Machine:edit.html.twig */
class __TwigTemplate_0a312cd82e7ca2621a95a0074886280a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'batnaarchi_body' => array($this, 'block_batnaarchi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BatnaArchiSiebelBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modification d'une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"mws-panel grid_8\"\">
        <div class=\"mws-panel-header\">
                <span class=\"mws-i-24 i-list\">Création d'une machine</span>
        </div>
        <div class=\"mws-panel-body\" style=\"padding:10px;\">
                    
                <form class=\"mws-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
    <p>
        <button class=\"mws-button black small\" type=\"submit\">Modifier</button>
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:Machine:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
