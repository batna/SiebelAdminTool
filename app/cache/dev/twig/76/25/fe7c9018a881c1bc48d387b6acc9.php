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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des gateway - ";
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
                <span class=\"mws-i-24 i-table-1\">Liste des gateway</span>
                </div>
                        <div class=\"mws-panel-body\">
                        <div class=\"mws-panel-toolbar top clearfix\">
                                <ul>
                                        <li>
                                                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gateway_new"), "html", null, true);
        echo "\" class=\"mws-ic-16 ic-page\">Nouvelle gateway</a>
                                        </li>
                                </ul>
                        </div>
                        <table class=\"mws-datatable-fn mws-table\">
                            <thead>
                                <tr>

            <th>Actions</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <tr>
            <td class=\"\">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gateway_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-view\" title=\"Voir\">&nbsp;</div></a>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gateway_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-edit\" title=\"Modifier\">&nbsp;</div></a>
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gateway_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" border=\"0\" style=\"width:20px;float:left;text-decoration:none\"><div class=\"mws-ic-16 ic-cross\" title=\"Supprimer\">&nbsp;</div></a>
            </td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
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
