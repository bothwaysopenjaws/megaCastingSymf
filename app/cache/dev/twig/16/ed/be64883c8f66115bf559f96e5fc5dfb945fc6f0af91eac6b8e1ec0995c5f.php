<?php

/* MegaCastingBundle:Default:index.html.twig */
class __TwigTemplate_16edbe64883c8f66115bf559f96e5fc5dfb945fc6f0af91eac6b8e1ec0995c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:index.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
    <h1 align=\"center\" class =\"titre_index\"> MegaCastings</h1>
    
    <img class=\"img_index\" src=\"..\\images\\indexe.jpg\" alt=\"Nouveau !\" /> 
    <br/>
    <br/>
    <p><b>MegaProduction</b> est une société de production créée en janvier 2003.</p>

    <p>Parce que le milieu artistique est un monde qui compte beaucoup d'abus, <b>MegaProduction</b> souhaite créer un site Internet de castings <i>« MegaCastings »</i> 
        qui serait à la fois clair, professionnel et digne de confiance.</p>


    <p>C'est pour cette raison que <b>MegaCastings</b> s’engage à être au contraire actif et réactif en permanence dans leur recherche de castings auprès d’un réseau de partenaires ; 
        c'est également pour cette raison que <b>MegaCastings</b> vérifiera systématiquement les informations des professionnels souhaitant publier des castings en les contactant par 
        téléphone afin de garantir le sérieux des annonces.<p>


    <p>MegaCastings se veut être un point de rencontre entre professionnels à la recherche de nouveaux talents et artistes désireux de faire leur entrée dans le monde du spectacle.</p>
<br/>

    <table align=\"center\" class=\"mosaique\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"> 
        <tr> 
            <td><IMG SRC=\"..\\images\\cine2.jpg\"></td> 
            <td><IMG SRC=\"..\\images\\casting.jpg\"></td> 
            <td><IMG SRC=\"..\\images\\musique2.jpg\"></td> 
        </tr> 
        <tr>
            <td><IMG SRC=\"..\\images\\musique.jpg\"></td>
            <td><IMG SRC=\"..\\images\\cinema.jpg\"></td>
            <td><IMG SRC=\"..\\images\\theatre.jpg\"></td>
        </tr>
    </table> 

";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  28 => 7,  11 => 1,);
    }
}
