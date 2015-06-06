<?php

/* MegaCastingBundle:Default:listeOffres.html.twig */
class __TwigTemplate_8078214f7c31f0f88f6b2c9b34d1f8be5478dcf7cd6251eed2706ebc64ba9cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:listeOffres.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres"))) != 0)) {
            // line 7
            echo "                    <ul class=\"thumbnails\">
                    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 9
                echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <h4>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "intitule", array()), "html", null, true);
                echo "</h4>
                                <div class=\"caption\">
                                    
                                    <p>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "typecontrat", array()), "libelle", array()), "html", null, true);
                echo "</p>
                                    <p> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "duree", array()), "html", null, true);
                echo "</p>
                                    <div style='font-style: italic'> mise en ligne :  ";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "datePublication", array()), "m/d/Y"), "html", null, true);
                echo "</p>
                                    <div style='font-style: italic'> debut du contrat : ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "dateDebut", array()), "m/d/Y"), "html", null, true);
                echo "</p>
                                    
                                     <a  href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mega_casting_detailOffre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn\">

                                         Détails de l'offre
                                     </a>
       
                                    
                                    
                                </div>
                                    
                        </li>
                        
                        
                        
                       
                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </ul>

                    <div class=\"navigation\">
                        
                    </div>

                ";
        } else {
            // line 42
            echo "                    Aucun produit
                ";
        }
        // line 44
        echo "                
       ";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:listeOffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  101 => 42,  92 => 35,  70 => 19,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  47 => 11,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
