<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_a1ae0ef742cbded0c0b785fef8b89d15318d25495792152610fc1480ab047750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/"), "html", null, true);
        echo "\">MegaCastings<img src=\"..\\images\\unnamed.png\"></a>
                <a class=\"brand\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/listeOffres"), "html", null, true);
        echo "\">Nos offres</a>
                <a class=\"brand\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/nousContacter"), "html", null, true);
        echo "\">Nous contacter</a>
                <a class=\"brand\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/quiSommesNous"), "html", null, true);
        echo "\">Qui sommes nous</a>
                <a class=\"brand\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/profile"), "html", null, true);
        echo "\">Votre Profil</a>
                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "<hr noshade size=\"3\" width=\"100%\" align=\"center\">
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy;Copyright 2015 - CoderLand </p>
            </div>
        </div>
    </div>
</footer>\t
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>

";
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        echo "MegaCastings";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  143 => 38,  138 => 12,  132 => 6,  125 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  99 => 39,  97 => 38,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  53 => 13,  51 => 12,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
