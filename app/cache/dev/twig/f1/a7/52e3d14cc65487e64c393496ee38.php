<?php

/* BatnaArchiSiebelBundle:Machine:index.html.twig */
class __TwigTemplate_f1a752e3d14cc65487e64c393496ee38 extends Twig_Template
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
        echo "Liste des machines - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->displayParentBlock("batnaarchi_body", $context, $blocks);
        echo "

<div class=\"mws-panel grid_8\">
        <div class=\"mws-panel-header\">
                <span class=\"mws-i-24 i-table-1\">Liste des machines</span>
                </div>
                        <div class=\"mws-panel-body\">
                        <div class=\"mws-panel-toolbar top clearfix\">
                                <ul>
                                        <li>
                                                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouvelle machine</a>
                                        </li>
                                </ul>
                        </div>
                        <table class=\"mws-datatable-fn mws-table\">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>Hostname</th>
                                    <th>IP</th>
                                    <th>Type</th>
                                    <th>OS</th>
                                    <th>Ram</th>
                                    <th># CPU</th>
                                    <th>CPU GHz</th>
                                    <th>Parent</th>
                                </tr>
                            </thead>
                            <tbody>
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "        <tr>
            <td class=\"\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-view\" title=\"Voir\">&nbsp;</div></a>
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-edit\" title=\"Modifier\">&nbsp;</div></a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machine_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-cross\" title=\"Supprimer\">&nbsp;</div></a>
            </td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hostname"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ip"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "os"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ram"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cpuCore"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cpuFrequency"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "parent"), "html", null, true);
            echo "</td>
            
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:Machine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
