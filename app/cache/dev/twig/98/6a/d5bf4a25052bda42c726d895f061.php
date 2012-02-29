<?php

/* BatnaArchiSiebelBundle:Environnement:edit.html.twig */
class __TwigTemplate_986ad5bf4a25052bda42c726d895f061 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modification d'un environnement";
    }

    // line 3
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"mws-panel grid_8\">
    <div class=\"mws-panel-header\">
        <span class=\"mws-i-24 i-table-1\">Modification d'un environnement</span>
    </div>
    <div class=\"mws-panel-body\">
    \t<div class=\"mws-panel-toolbar top clearfix\">
        \t<ul>
            \t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("env"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-application-view-list\">Voir la liste</a></li>
            </ul>
        </div>
        <div style=\"margin:10px\">
            <form class=\"mws-form\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("env_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
                <div class=\"mws-form-row\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
                </div>
                <div class=\"mws-button-row\">
                \t
                \t<input type=\"reset\" value=\"Annuler\" class=\"mws-button red small\" />
                \t<input type=\"submit\" value=\"Modifier\" class=\"mws-button black small\" />
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:Environnement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
