<?php

/* MegaCastingBundle:Default:quiSommesNous.html.twig */
class __TwigTemplate_9d938a85c373cc5d6c45fecb75406b8fd8c5c0f6dbbd53b9e1016a55ddbaffbf extends Twig_Template
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
    <article>
        <h2>MegaGestion</h2>
        
        <h3>Historique</h3>

        <p>MegaProduction est une société de production créée en janvier 2003.</p>
        <p>Depuis un peu plus de 10 ans, MegaProduction accompagne les artistes, qu’ils soient danseurs, musiciens, 
            chorégraphes, compositeurs, réalisateurs ou photographes.
            Le bureau leur apporte un soutien en administration, en diffusion, met à leur disposition du 
            matériel et des outils de travail, les accompagne sur les dates de tournées, gère leurs diffusions 
            et leurs communications.</p>
    </article>

    <article>


        <h3> Secteur d’activité </h3>

        <p>Médias, cinéma, musique, théâtre, danse... Les métiers de l'audiovisuel et du spectacle 
            attirent de plus en plus de jeunes. Ils deviennent aussi de plus en plus précaires... 
            Un talent certain, une formation de qualité, mais aussi de la ténacité et de la volonté 
            sont indispensables.<p>
    </article>

    <hr noshade size=\"5\" width=\"75%\" align=\"center\">
    
    <article>
        <h2>Nos activités</h2>
        <p>
        <h3> Pôle Casting</h3>

        <p> Son activité consiste à mettre en relation les professionnels et les artistes.</p>

        <h3>Pôle Spectacle</h3>

        <p>Le pôle spectacle est l’activité majeure de MegaProduction. Ce pôle propose différentes prestations événementielles telles que :</p>

        <ul>
            <li>L’organisation de spectacles, musiques, théâtre</li>
            <li>Participer à l’organisation de show télévisuel.</li>
            <li>Spectacle éducatif, spectacle pédagogique, spectacle de sensibilisation</li>
            <li>Proposer des comédiens extraordinaires capables de jouer le maître de cérémonie, aboyeur ou présentateur.</li>
        </ul>

        <h3>Pôle boutique</h3>

        <p>Le Pôle boutique regroupe plusieurs points de ventes des produits diffusés par MegaProduction : Film, vidéo, T-shirts, ventes de musiques en ligne etc…
            A ce jour MegaProduction Compte 4 points de ventes dont 2 en région parisienne, St Denis et le 19ieme arrondissement de Paris, 1 boutique à Toulouse et une boutique dans une zone franche de Marseille.</p>

        <h3>Pôle musique</h3>

        <p>Son activité principale consiste à valoriser, promouvoir et accompagner des groupes.</p>

    </p>
</article>
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
