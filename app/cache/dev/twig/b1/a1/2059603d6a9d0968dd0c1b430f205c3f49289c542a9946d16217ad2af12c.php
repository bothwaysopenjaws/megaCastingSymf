<?php

/* MegaCastingBundle:Default:candidature.html.twig */
class __TwigTemplate_b1a12059603d6a9d0968dd0c1b430f205c3f49289c542a9946d16217ad2af12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MegaCastingBundle:Default:candidature.html.twig", 1);
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
        echo "    <h1 class=\"titr\">Candidature</h1>
    <div class=\"span12\">
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("mega_casting_candidatureArtiste");
        echo "\" method=\"post\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MegaCastingBundle:Default:candidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
