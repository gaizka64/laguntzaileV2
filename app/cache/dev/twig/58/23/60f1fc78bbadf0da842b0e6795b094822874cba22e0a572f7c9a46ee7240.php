<?php

/* laguntzaileBenevolesBundle:Default:candidatureEffectuee.html.twig */
class __TwigTemplate_582360f1fc78bbadf0da842b0e6795b094822874cba22e0a572f7c9a46ee7240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::vueMere.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenuCentral' => array($this, 'block_contenuCentral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        // line 4
        echo "
    <h3>Etre bénévole pour l'événement ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "nom", array()), "html", null, true);
        echo "</h3>
    <span class=\"glyphicons glyphicons-ok-2\" style=\"color=green\">Candidature envoyée</span>
  
";
    }

    public function getTemplateName()
    {
        return "laguntzaileBenevolesBundle:Default:candidatureEffectuee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
