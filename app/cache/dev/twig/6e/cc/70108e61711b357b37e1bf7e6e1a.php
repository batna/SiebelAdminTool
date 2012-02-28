<?php

/* BatnaArchiSiebelBundle:Machine:show.html.twig */
class __TwigTemplate_6ecc70108e61711b357b37e1bf7e6e1a extends Twig_Template
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
        echo "Caractéristiques d'une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"mws-panel grid_8\">
        <div class=\"mws-panel-header\">
                <span class=\"mws-i-24 i-clipboard-1\">Machine ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hostname"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"mws-panel-toolbar top clearfix\">
                <ul>
                        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouvelle machine</a></li>
                        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-edit\">Modifier</a></li>
                        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-cross\">Supprimer</a></li>
                        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-application-view-list\">Voir la liste</a></li>
                </ul>
        </div>
   
    <div class=\"mws-panel-body\" style=\"padding:10px\">


<table class=\"mws-table\">
    <tbody>
        <tr>
            <th>Hostname</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hostname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>IP</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ip"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>OS</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "os"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>RAM</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ram"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Core #</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cpuCore"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>CPU GHz</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cpuFrequency"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Parent</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "parent"), "html", null, true);
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
        return "BatnaArchiSiebelBundle:Machine:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
