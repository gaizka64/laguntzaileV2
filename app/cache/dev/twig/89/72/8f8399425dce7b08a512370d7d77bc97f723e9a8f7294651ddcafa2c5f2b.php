<?php

/* laguntzaileBenevolesBundle:Default:affectation.html.twig */
class __TwigTemplate_89728f8399425dce7b08a512370d7d77bc97f723e9a8f7294651ddcafa2c5f2b extends Twig_Template
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
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["personneEtEvenement"]) ? $context["personneEtEvenement"] : $this->getContext($context, "personneEtEvenement")), 0, array(), "array"), "idEvenement", array()), "nom", array()), "html", null, true);
        echo "</h3>
        <br />

";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")));
        echo "
";
        // line 8
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), "Affectation", array()));
        echo "
        
<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["personneEtEvenement"]) ? $context["personneEtEvenement"] : $this->getContext($context, "personneEtEvenement")), 0, array(), "array"), "idPersonne", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["personneEtEvenement"]) ? $context["personneEtEvenement"] : $this->getContext($context, "personneEtEvenement")), 0, array(), "array"), "idPersonne", array()), "nom", array()), "html", null, true);
        echo ",</p>
        <br />

        ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["tabAffectations"]) ? $context["tabAffectations"] : $this->getContext($context, "tabAffectations"))) == 0)) {
            // line 14
            echo "            <p> Aucune propositions d'affectation pour l'instant.</p>
        ";
        } else {
            // line 16
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["tabAffectations"]) ? $context["tabAffectations"] : $this->getContext($context, "tabAffectations"))) == 1)) {
                // line 17
                echo "                <p> Voici l'affectation qui vous est proposée :</p>
            ";
            } elseif ((twig_length_filter($this->env,             // line 18
(isset($context["tabAffectations"]) ? $context["tabAffectations"] : $this->getContext($context, "tabAffectations"))) > 1)) {
                // line 19
                echo "                <p> Voici la liste des affectations qui vous sont proposées :</p>
            ";
            }
            // line 21
            echo "     
    <form method=\"post\" ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), 'enctype');
            echo ">
            <table class=\"table\">
                <thead>
                  <tr>
                    <th>Poste</th>
                    <th>Tour</th>
                    <th>Choix</th>
                  </tr>
                    ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabAffectations"]) ? $context["tabAffectations"] : $this->getContext($context, "tabAffectations")));
            foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
                // line 31
                echo "                     <tr>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["affectation"], "idTour", array()), "idPoste", array()), "nom", array()), "html", null, true);
                echo "</td>
                            <td>De ";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["affectation"], "idTour", array()), "debut", array()), "m/d/Y H:i"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["affectation"], "idTour", array()), "fin", array()), "m/d/Y H:i"), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireAffectation"]) ? $context["formulaireAffectation"] : $this->getContext($context, "formulaireAffectation")), "Affectation", array()), 'widget');
                echo "
                            </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affectation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </thead>
                <tbody>
                   
               </tbody>
            </table>


                       <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer !\"/> 
                     </span> 
         </form>
        ";
        }
    }

    public function getTemplateName()
    {
        return "laguntzaileBenevolesBundle:Default:affectation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  113 => 35,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  84 => 22,  81 => 21,  77 => 19,  75 => 18,  72 => 17,  69 => 16,  65 => 14,  63 => 13,  55 => 10,  50 => 8,  46 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
