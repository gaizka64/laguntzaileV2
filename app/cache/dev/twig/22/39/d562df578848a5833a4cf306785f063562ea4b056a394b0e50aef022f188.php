<?php

/* ::vueMere.html.twig */
class __TwigTemplate_2239d562df578848a5833a4cf306785f063562ea4b056a394b0e50aef022f188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'central' => array($this, 'block_central'),
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <div class=\"container\">
            <!-- Ligne 1 --> 
            <div class=\"row\">
                <div class=\"col-xs-12\" style=\"background: #089635; z-index: 1\">
                    ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "                </div>
            </div>    
        </div>
        
        <div id=\"corp\" class=\"container\">
            <!-- Ligne 2 --> 
            <div class=\"row\">
                <div class=\"col-md-2\"></div>
                ";
        // line 31
        $this->displayBlock('central', $context, $blocks);
        // line 37
        echo "            </div>
        </div>
    
        <div class=\"container\">
            <!-- Ligne 3 --> 
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "                </div>
            </div>
        </div>

        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-dropdown.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>


";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        
        
        ";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "                    <center>
                        <img class=\"displayed\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bandeau.png"), "html", null, true);
        echo "\"/>
                    </center>
                    ";
    }

    // line 31
    public function block_central($context, array $blocks = array())
    {
        // line 32
        echo "                <div id=\"section\" class=\"col-md-8\">
                    ";
        // line 33
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 34
        echo "     
                </div>
                ";
    }

    // line 33
    public function block_contenuCentral($context, array $blocks = array())
    {
        // line 34
        echo "                    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "::vueMere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  149 => 44,  145 => 34,  142 => 33,  136 => 34,  134 => 33,  131 => 32,  128 => 31,  121 => 20,  118 => 19,  115 => 18,  107 => 8,  102 => 7,  99 => 6,  94 => 5,  84 => 52,  80 => 51,  76 => 50,  70 => 46,  68 => 44,  59 => 37,  57 => 31,  47 => 23,  45 => 18,  37 => 12,  35 => 6,  31 => 5,  25 => 1,);
    }
}
