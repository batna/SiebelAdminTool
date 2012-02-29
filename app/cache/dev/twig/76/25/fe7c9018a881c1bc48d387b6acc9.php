<?php

/* BatnaArchiSiebelBundle:Gateway:index.html.twig */
class __TwigTemplate_7625fe7c9018a881c1bc48d387b6acc9 extends Twig_Template
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
        echo " - Liste des gateway";
    }

    // line 3
    public function block_batnaarchi_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"mws-panel grid_8\">
    <div class=\"mws-panel-header\">
            <span class=\"mws-i-24 i-table-1\">Liste des gateways</span>
    </div>
    <div class=\"mws-panel-body\">
        <div class=\"mws-panel-toolbar top clearfix\">
            <ul>
                <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouvelle gateway</a></li>
            </ul>
        </div>
        <table class=\"mws-datatable-fn mws-table\">
            <thead>
                <tr>
            <th>Actions</th>
            <th>Port</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <tr>
            <td>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><div class=\"clearfix mws-ic-16 ic-view\" style=\"width:20px;float:left;\">&nbsp;</div></a>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><div class=\"clearfix mws-ic-16 ic-edit\" style=\"width:20px;float:left;\">&nbsp;</div></a>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><div class=\"clearfix mws-ic-16 ic-cross\" style=\"width:20px;float:left;\">&nbsp;</div></a>
            </td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "port"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "    </tbody>
</table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BatnaArchiSiebelBundle:Gateway:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
