<?php

/* views/modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_7451275a3b14f6813962d4ac03cd507d81442693d8aff84ea99d96aecb6bc90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
            </li>
            
              <li>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier mon mot de passe</a>
            </li>
            
            <li>
                <a href=\"#\">Mes offres</a>
            </li>
            
            <li>
                <a href=\"#\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "views/modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
