<?php

/* :modulesUsed:utilisateursConnecte.html.twig */
class __TwigTemplate_4edeb57313aa804f442d1811cb60915735eac9e2ee14a6dc9e5197cad15629ec extends Twig_Template
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
     <a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("mega_casting_candidatureArtiste");
        echo "\" class=\"btn\">

        Envoyer sa candidature
        </a>
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
            </li>
            
              <li>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier mon mot de passe</a>
            </li>
      
            <li>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  44 => 15,  37 => 11,  31 => 8,  22 => 2,  19 => 1,);
    }
}
