<?php

/* MegaCastingBundle:Default:candidatureOffre.html.twig */
class __TwigTemplate_3fa6da8c483e061a804ac93806f3c0aafd37eaff6c5a8f6fa21b3118df83a850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:candidatureOffre.html.twig", 1);
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
    <h1>Candidature</h1>
<form method=\"post\" action=\"traitement.php\">
 
   <fieldset>
       <legend>Information Personnelles</legend> 

       <label for=\"nom\"> Nom </label>
       <input type=\"text\" name=\"nom\" id=\"nom\" />

       <label for=\"prenom\">Prénom</label>
       <input type=\"text\" name=\"prenom\" id=\"prenom\" />
 
       <label for=\"email\">Email</label>
       <input type=\"email\" name=\"email\" id=\"email\" />
       
       <label for=\"telephone\">Téléphone</label>
       <input type=\"tel\" name=\"telephone\" id=\"telephone\" />

   </fieldset>
 
   <fieldset>
       <legend>Votre CV</legend> <!-- Titre du fieldset -->
 
   </fieldset>
</form>
    
 <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("mega_casting_candidatureOffre");
        echo "\" class=\"btn\">Envoyer sa candidature</a>   
    
";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:candidatureOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  31 => 4,  28 => 3,  11 => 1,);
    }
}
