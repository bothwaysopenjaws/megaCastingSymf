<?php

/* MegaCastingBundle:Default:quiSommesNous.html.twig */
class __TwigTemplate_a64075131edb239abecd36981bd735479c27d7cc6adb19865520a23bb1279d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:quiSommesNous.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
    <h2> Secteur d’activité </h2>

<p>Médias, cinéma, musique, théâtre, danse... Les métiers de l'audiovisuel et du spectacle 
   attirent de plus en plus de jeunes. Ils deviennent aussi de plus en plus précaires... 
   Un talent certain, une formation de qualité, mais aussi de la ténacité et de la volonté 
   sont indispensables.<p>

    <h2>Historique</h2>

    <p>MegaProduction est une société de production créée en janvier 2003.</p>
    <p>Depuis un peu plus de 10 ans, MegaProduction accompagne les artistes, qu’ils soient danseurs, musiciens, 
    chorégraphes, compositeurs, réalisateurs ou photographes.
Le bureau leur apporte un soutien en administration, en diffusion, met à leur disposition du 
    matériel et des outils de travail, les accompagne sur les dates de tournées, gère leurs diffusions 
    et leurs communications.</p>

";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:quiSommesNous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }
}
