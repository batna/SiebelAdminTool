<?php

/* BatnaArchiSiebelBundle:Gateway:show.html.twig */
class __TwigTemplate_479869ebaed21079aa0c416cc493573a extends Twig_Template
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
        echo " - Détail d'une gateway";
    }

    // line 3
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"mws-panel grid_8\">
    <div class=\"mws-panel-header\">
        <span class=\"mws-i-24 i-table-1\">Detail de la gateway ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "host"), "__toString", array(), "method"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "port"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"mws-panel-body\">
    \t<div class=\"mws-panel-toolbar top clearfix\">
        \t<ul>
            \t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouvelle</a></li>
            \t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-edit\">Modifier</a></li>
            \t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-cross\">Supprimer</a></li>
            \t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-application-view-list\">Voir la liste</a></li>
            </ul>
        </div>
        <div style=\"margin:10px\">
            <table class=\"mws-table\">
                <tbody>
                    <tr>
                        <th>Machine</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "host"), "__toString", array(), "method"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Port</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "port"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:Gateway:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
