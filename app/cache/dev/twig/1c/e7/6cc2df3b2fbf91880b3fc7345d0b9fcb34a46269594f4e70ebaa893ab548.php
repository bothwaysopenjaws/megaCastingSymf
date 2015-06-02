<?php

/* MegaCastingBundle:Default:nousContacter.html.twig */
class __TwigTemplate_1ce76cc2df3b2fbf91880b3fc7345d0b9fcb34a46269594f4e70ebaa893ab548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:nousContacter.html.twig", 1);
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
    <h2>Nous contacter :</h2>
    <p>Une question, des précisions sur nos offres ou toute autre information ?</p>
    <p> MegaProduction s'engage à vous répondre dans les plus brefs délais ! 
        N'attendez plus pour contacter le Service Clients par email en remplissant le formulaire ci-dessous :</p>
    <form action=\"/ma-page-php\" method=\"post\">
        <div>
            <label for=\"nom\">Nom :</label>
            <input type=\"text\" id=\"nom\" />
        </div>
        <div>
            <label for=\"nom\">Prénom :</label>
            <input type=\"text\" id=\"nom\" />
        </div>
        <div>
            <label for=\"courriel\">Email :</label>
            <input type=\"email\" id=\"courriel\" />
        </div>
        <div>
            <label for=\"message\">Message :</label>
            <textarea id=\"message\"></textarea>
        </div>

        <div class=\"button\">
            <button type=\"submit\">Envoyer</button>
        </div>
    </form>  
    <hr noshade size=\"5\" width=\"75%\" align=\"center\">
    <h3>Nous appeler</h3>
    <p>Le Service Clients est accessible, de 9h à 20h du lundi au samedi, au
        Les appels reçus et émis par le Service Clients sont susceptibles d'être enregistrés
        à des fins de formation et dans le but d'améliorer constamment la qualité du service 
        mis à disposition du client. </p>
    <p><img src=\"megaCasting/../../../../web/images/num-vert.gif\"></p>
    <hr noshade size=\"5\" width=\"75%\" align=\"center\">
    <h3>Nous écrire</h3>
    <p>Si vous désirez écrire au siège de l'entreprise MegaProduction :<p>
    <p><h4>Service Clients MegaProduction</h4></p>
    <p> 65 avenue Edouard Vaillant</p>
    <p>92100 Boulogne Billancourt</p>

";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:nousContacter.html.twig";
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
