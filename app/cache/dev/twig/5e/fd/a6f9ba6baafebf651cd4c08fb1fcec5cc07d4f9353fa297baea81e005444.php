<?php

/* MegaCastingBundle:Default:detailOffre.html.twig */
class __TwigTemplate_5efda6f9ba6baafebf651cd4c08fb1fcec5cc07d4f9353fa297baea81e005444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:detailOffre.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <h2 class=\"row\">
            <div>  Détail de l'offre : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "intitule", array()), "html", null, true);
        echo " </div>
        </h2>
        <div>
            <div class=\"span12\">
                <div>
                Date de publication : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "datePublication", array()), "d/m/Y"), "html", null, true);
        echo "
                </div>
                <div>
                    Date de début : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "
                </div>
           </div>
            
            
            
            <div class=\"span12\">
                Recruteur : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "prenom", array()), "html", null, true);
        echo "
            </div>
            
            
            <h4 class=\"span12\">  Détail de l'offre : </h4>
            
            
            
            <div class=\"span12\" style=\"width: max-content;  border: 1px solid; margin-bottom: 10px;\">
                
                <div>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo " </div>
                
            </div>
                
                
            <br>
        </div>




 
";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:detailOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  59 => 21,  49 => 14,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
