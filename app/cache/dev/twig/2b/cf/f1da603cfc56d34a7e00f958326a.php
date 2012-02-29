<?php

/* ::layout.html.twig */
class __TwigTemplate_2bcff1da603cfc56d34a7e00f958326a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'batnaarchi_body' => array($this, 'block_batnaarchi_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

";
        // line 6
        $this->env->loadTemplate("::appels.html.twig")->display($context);
        // line 7
        echo "
<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>

<body>

<!--Début header-->
<div id=\"mws-header\" class=\"clearfix\">
    <!-- Logo Wrapper -->
    <div id=\"mws-logo-container\">
        <div id=\"mws-logo-wrap\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/batna.png"), "html", null, true);
        echo "\" alt=\"Batna\" style=\"width:40px\" /><span style=\"font-size:1.5em;color:grey;\">Batna</spen>
         </div>
     </div>
 
     <!-- User Area Wrapper -->
     <div id=\"mws-user-tools\" class=\"clearfix\">
        <!-- User Notifications -->
        <div id=\"mws-user-notif\" class=\"mws-dropdown-menu\">
            <a href=\"#\" class=\"mws-i-24 i-alert-2 mws-dropdown-trigger\">
                 Notifications
             </a>
             <span class=\"mws-dropdown-notif\">35</span>
             <div class=\"mws-dropdown-box\">
                 <div class=\"mws-dropdown-content\">
                     <ul class=\"mws-notifications\">
                        <!-- Here Goes all the notifications -->
                     </ul>
                     <div class=\"mws-dropdown-viewall\">
                        <a href=\"#\">Voir toutes les notifications</a>
                     </div>
                 </div>
             </div>
         </div>
 
         <!-- User Messages -->
         <div id=\"mws-user-message\" class=\"mws-dropdown-menu\">
             <a href=\"#\" class=\"mws-i-24 i-message mws-dropdown-trigger\">Messages</a>
             <span class=\"mws-dropdown-notif\">35</span>
             <div class=\"mws-dropdown-box\">
                 <div class=\"mws-dropdown-content\">
                     <ul class=\"mws-messages\">
                         <!-- Here goes all the messages -->
                      </ul>
                     <div class=\"mws-dropdown-viewall\">
                         <a href=\"#\">Voir tous les messages</a>
                     </div>
                 </div>
             </div>
         </div>
 
        <!-- User Functions -->
        <div id=\"mws-user-info\" class=\"mws-inset\">
            <div id=\"mws-user-photo\">
                <img src=\"example/profile.jpg\" alt=\"User Photo\" />
            </div>
            <div id=\"mws-user-functions\">
                <div id=\"mws-username\">
                    Hello, John Doe
                </div>
                <ul>
                    <li><a href=\"#\">Profile</a></li>
                    <li><a href=\"#\">Change Password</a></li>
                    <li><a href=\"index.php\">Logout</a></li>
                </ul>
            </div>
        </div>
       <!-- End User Functions -->
    </div>
</div>
<!--Fin header-->



<!--Debut corps-->
<div id=\"mws-wrapper\">
   <!-- Necessary markup, do not remove -->
    <div id=\"mws-sidebar-stitch\"></div>
    <div id=\"mws-sidebar-bg\"></div>
     
    <!-- Sidebar Wrapper -->
    <div id=\"mws-sidebar\">
     
        <!-- Search Box -->
        <div id=\"mws-searchbox\" class=\"mws-inset\">
            \t<form action=\"icons.html\">
                \t<input type=\"text\" class=\"mws-search-input\" />
                    <input type=\"submit\" class=\"mws-search-submit\" />
                </form>
            </div>
 
        <!-- Main Navigation -->
        <div id=\"mws-navigation\">
            <ul>
                <li>
                    <a href=\"#\" class=\"mws-i-24 i-abacus\">Référentiel</a>
                    <ul>
                        <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("host"), "html", null, true);
        echo "\">Machines</a></li>
                        <li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gtw"), "html", null, true);
        echo "\">Gateway</a></li>
                        <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("es"), "html", null, true);
        echo "\">Enterprise</a></li>
                        <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss"), "html", null, true);
        echo "\">Server</a></li>
                        <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bdd"), "html", null, true);
        echo "\">Base de données</a></li>
                        <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contexte"), "html", null, true);
        echo "\">Contexte</a></li>
                        <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("env"), "html", null, true);
        echo "\">Environnement</a></li>  
                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"mws-i-24 i-graph\">Monitoring</a>
                    <ul>
                        <li><a href=\"#\">Espaces disque</a></li>
                        <li><a href=\"#\">Volumes des bases</a></li>
                        <li><a href=\"#\">Utilisateurs déclarés</a></li>
                        <li><a href=\"#\">Utilisateurs connecté</a></li>
                        <li><a href=\"#\">Crash</a></li>
                        <li><a href=\"#\">Event Viewer</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"mws-i-24 i-lock-locked\">Administration</a>
                    <ul>
                        <li><a href=\"#\">Auto discovery</a></li>
                        <li><a href=\"#\">Gestion des accès</a></li>
                    </ul>
                </li>
            </ul>
        
        </div>
        <!-- End Navigation -->
 
    </div>
 
    <!-- Container Wrapper -->
    <div id=\"mws-container\" class=\"clearfix\">
     
        <!-- Main Container -->
        <div class=\"container\">
        ";
        // line 144
        $this->displayBlock('batnaarchi_body', $context, $blocks);
        // line 145
        echo "        </div>
        <!-- End Main Container -->
         
        <!-- Footer -->
        <div id=\"mws-footer\" style=\"min-height:1000px;\">
            Batna 2012. Tous droits réservés.
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Container Wrapper -->
 
</div>
<!--Fin corps-->
</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "BatnaTools";
    }

    // line 144
    public function block_batnaarchi_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
