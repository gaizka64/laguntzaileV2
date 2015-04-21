<?php

/* laguntzaileBenevolesBundle:Default:erreur.html.twig */
class __TwigTemplate_156eaab6c64b0f1714d81f81a0efa2bdf3cd2b533bc590adc97be17211f96142 extends Twig_Template
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
        echo "    <h3>Evénement non trouvé </h3>
";
    }

    public function getTemplateName()
    {
        return "laguntzaileBenevolesBundle:Default:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
