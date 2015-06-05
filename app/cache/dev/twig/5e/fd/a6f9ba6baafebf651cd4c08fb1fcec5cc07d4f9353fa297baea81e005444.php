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
    <h2 class=\"titr\">
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "intitule", array()), "html", null, true);
        echo " </p>
    </h2>
    <div>

        <div class=\"span3\">
            <p><b>Date de publication</b> : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "datePublication", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            <p><b>Date de début</b> : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            <p><b>Durée</b> : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "duree", array()), "html", null, true);
        echo "</p>
            <p><b>Type de contrat</b> : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "typecontrat", array()), "libelle", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"span2\">
            <h4>société :</h4> 
            <p> <b>Recruteur</b></p>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "prenom", array()), "html", null, true);
        echo "</p>
            <p> <b>Contact</b> </p>
            <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "email", array()), "html", null, true);
        echo " </p><p>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "telephone", array()), "html", null, true);
        echo "</p>
            <p> <b>Coordonnées</b> : </p>
            <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "adresse", array()), "rue", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "adresse", array()), "codePostal", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "adresse", array()), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "utilisateur", array()), "adresse", array()), "pays", array()), "html", null, true);
        echo "</p>

        </div>
        <div class=\"span12\">
            <h4>Métier :</h4> 
            <p><b>Intitulé</b> : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "metier", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><b>Description</b> : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "metier", array()), "description", array()), "html", null, true);
        echo "</p>
        </div>

    </div>

    <h4 class=\"span12\">  Description de l'offre : </h4>

    <div class=\"span12 descriptionOffre \" >

        <div>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo " </div>

    </div>

    <a  href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("mega_casting_candidatureOffre");
        echo "\" class=\"btn\">

        Envoyer sa candidature
    </a>
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
        return array (  114 => 42,  107 => 38,  95 => 29,  91 => 28,  77 => 23,  70 => 21,  63 => 19,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
