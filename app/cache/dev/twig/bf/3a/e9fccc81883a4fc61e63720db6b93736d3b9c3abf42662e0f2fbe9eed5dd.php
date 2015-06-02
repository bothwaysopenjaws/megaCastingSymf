<?php

/* MegaCastingBundle:Default:listeOffres.html.twig */
class __TwigTemplate_bf3ae9fccc81883a4fc61e63720db6b93736d3b9c3abf42662e0f2fbe9eed5dd extends Twig_Template
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
<!--        ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["artistes"]) ? $context["artistes"] : $this->getContext($context, "artistes"))) != 0)) {
            // line 7
            echo "                <ul class=\"thumbnails\">
                ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["artistes"]) ? $context["artistes"] : $this->getContext($context, "artistes")));
            foreach ($context['_seq'] as $context["_key"] => $context["artiste"]) {
                // line 9
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
      
                            ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "libelle", array()), "html", null, true);
                echo "
                            ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "DateDebut", array()), "html", null, true);
                echo "
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "DateNaissance", array()), "html", null, true);
                echo "

                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artiste'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </ul>

                <div class=\"navigation\">
                    
                </div>
                
            ";
        } else {
            // line 27
            echo "                    Aucun artistes
            ";
        }
        // line 29
        echo "
            
       -->     
            
            list of bananas
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
        return array (  81 => 29,  77 => 27,  68 => 20,  56 => 14,  52 => 13,  48 => 12,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
