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
        // line 11
        echo "    </head>
    <body>
        <div class=\"container\">
            <!-- Ligne 1 --> 
";
        // line 23
        echo "    
        </div>
        
        <div id=\"corp\" class=\"container\">
            <!-- Ligne 2 --> 
            <div class=\"row\">
                <div class=\"col-md-2\"></div>
                ";
        // line 30
        $this->displayBlock('central', $context, $blocks);
        // line 36
        echo "            </div>
        </div>
    
        <div class=\"container\">
            <!-- Ligne 3 --> 
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "                </div>
            </div>
        </div>

        <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-dropdown.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 51
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

    // line 30
    public function block_central($context, array $blocks = array())
    {
        // line 31
        echo "                <div id=\"section\" class=\"col-md-8\">
                    ";
        // line 32
        $this->displayBlock('contenuCentral', $context, $blocks);
        // line 33
        echo "     
                </div>
                ";
    }

    // line 32
    public function block_contenuCentral($context, array $blocks = array())
    {
        // line 33
        echo "                    ";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
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
        return array (  132 => 44,  129 => 43,  125 => 33,  122 => 32,  116 => 33,  114 => 32,  111 => 31,  108 => 30,  101 => 8,  96 => 7,  93 => 6,  88 => 5,  78 => 51,  74 => 50,  70 => 49,  64 => 45,  62 => 43,  53 => 36,  51 => 30,  42 => 23,  36 => 11,  34 => 6,  30 => 5,  24 => 1,);
    }
}
