<?php

/* BatnaArchiSiebelBundle:EnterpriseServer:show.html.twig */
class __TwigTemplate_240786d6f0f545dc4862b6fbab29e4d0 extends Twig_Template
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
        echo "Caractéristiques d'un enterprise server - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"mws-panel grid_8\">
        <div class=\"mws-panel-header\">
                <span class=\"mws-i-24 i-clipboard-1\">Enterprise server ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"mws-panel-toolbar top clearfix\">
                <ul>
                        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enterpriseserver_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouveau enterprise server</a></li>
                        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enterpriseserver_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-edit\">Modifier</a></li>
                        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enterpriseserver_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-cross\">Supprimer</a></li>
                        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enterpriseserver"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-application-view-list\">Voir la liste</a></li>
                </ul>
        </div>
   
    <div class=\"mws-panel-body\" style=\"padding:10px\">


<table class=\"mws-table\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:EnterpriseServer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
