<?php

/* laguntzaileBenevolesBundle:Default:traitementAffectation.html.twig */
class __TwigTemplate_b02719f86a9f7b60312b16fe686b5b207edb44c3830f6aed4ca27ad0c30d8a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laguntzaile_benevoles_traitementAffectation", array("affectation" => (isset($context["affectation"]) ? $context["affectation"] : $this->getContext($context, "affectation")), "redirection" => 1)), "html", null, true);
        echo "\" method=\"post\" class=\"form-inline\" style=\"margin: 20px\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), 'enctype');
        echo ">
                    <tr>
                            <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["affectation"]) ? $context["affectation"] : $this->getContext($context, "affectation")), "idTour", array()), "idPoste", array()), "nom", array()), "html", null, true);
        echo "</td>
                            <td>De ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["affectation"]) ? $context["affectation"] : $this->getContext($context, "affectation")), "idTour", array()), "debut", array()), "m/d/Y H:i"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["affectation"]) ? $context["affectation"] : $this->getContext($context, "affectation")), "idTour", array()), "fin", array()), "m/d/Y H:i"), "html", null, true);
        echo "</td>
                            <td>
                ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), 'form_start');
        echo "
                                ";
        // line 8
        echo "                                ";
        // line 9
        echo "
        <input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"Accepter\">

        <a class=\"btn btn-danger\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("laguntzaile_benevoles_refusAffectation", array("idAffectation" => $this->getAttribute((isset($context["affectation"]) ? $context["affectation"] : $this->getContext($context, "affectation")), "id", array()))), "html", null, true);
        echo "\">Refuser</a>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), 'rest');
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), 'form_end');
        echo "
</form>        
                          </tr>
                    
                ";
    }

    public function getTemplateName()
    {
        return "laguntzaileBenevolesBundle:Default:traitementAffectation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 13,  49 => 12,  44 => 9,  42 => 8,  38 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
