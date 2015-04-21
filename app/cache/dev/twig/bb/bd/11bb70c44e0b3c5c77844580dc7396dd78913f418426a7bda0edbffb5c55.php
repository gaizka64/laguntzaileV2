<?php

/* laguntzaileBenevolesBundle:Default:candidature.html.twig */
class __TwigTemplate_bbbd11bb70c44e0b3c5c77844580dc7396dd78913f418426a7bda0edbffb5c55 extends Twig_Template
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
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Candidature pour l'événement ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "nom", array()), "html", null, true);
    }

    // line 3
    public function block_contenuCentral($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h3 class=\"centrer\">Candidature pour l'événement ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "nom", array()), "html", null, true);
        echo "</h3></div>
    
    <div class=\"well\">
        <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), 'enctype');
        echo ">
            <table class=\"table\">
                <thead>
                  <tr>
                    <th class=\"centrer\" colspan=\"2\">Coordonnées</th>
                    
                    <th class=\"centrer\" colspan=\"2\">Candidature</th>
                    
                  </tr>
                </thead>
                <tbody>
                        ";
        // line 20
        echo "                        <tr>
                            <td>
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'label');
        echo "
                                <br />
                                (requis)
                            </td>
                            
                            
                            
                            <td width=2%>
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'errors');
        echo "
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'label');
        echo "
                                (Jours et heures de vos disponibilités et indisponibilités) 
                            </td>
                            
                            
                            
                            <td>
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'errors');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'widget');
        echo " 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'label');
        echo "
                                <br />
                                (requis)
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'label');
        echo "
                                <br />
(Personnes avec qui vous souhaitez être ou ne pas être)
                            </td>
                            
                            
                            
                            <td>
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'errors');
        echo "
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "day", array()), 'widget', array("attr" => array("size" => "2")));
        echo "
                                /
                                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "month", array()), 'widget', array("attr" => array("size" => "2")));
        echo "
                                /
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "year", array()), 'widget', array("attr" => array("size" => "4")));
        echo "
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), 'errors');
        echo "
                                
                            </td>
                            
                            
                            
                            <td>
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'errors');
        echo "
                                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'errors');
        echo "
                                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                         ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'label');
        echo "
                            <br />
                                (Pour nous aider à vous trouver un poste)
                            </td>
                            
                            
                            
                            <td>
                            ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'errors');
        echo "
                                ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan=\"2\">
                                ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'label');
        echo "
                                <br />
                                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'errors');
        echo "
                                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'widget');
        echo "
                                <br />
                                <span class=\"gauche\">
                                Code Postal";
        // line 148
        echo "                            <br />
                                ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "codePostal", array()), 'errors');
        echo "
                                ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "codePostal", array()), 'widget');
        echo " 
                                </span>
                                <span class=\"droite\">
                                Commune";
        // line 154
        echo "                                <br />
                                ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "ville", array()), 'errors');
        echo "
                                ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "ville", array()), 'widget');
        echo " 
                                </span>

                            </td>
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'errors');
        echo "
                                ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'errors');
        echo "
                                ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'errors');
        echo "
                                ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'label');
        echo "
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'errors');
        echo "
                                ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'label');
        echo "
                                <br />
                                (ex : français,basque,...)
                            </td>
                            
                            
                            
                            <td>
                                ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'errors');
        echo "
                                ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'widget');
        echo " 
                            </td>
                            
                            
                            
                            <td>
                        
                            </td>
                            
                            
                            
                            <td>
                            
                            </td>
                        </tr>            
                    
                        <tr>   
                            <td>
                                ";
        // line 304
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), 'rest');
        echo "
                            </td>
                            <td></td>
                            <td></td>
                            <td> <span class=\"pourBougerBouton\"> <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer !\"/> </span> <td>
                        </tr>
                            
                </tbody>
            </table>
                
\t   </form>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "laguntzaileBenevolesBundle:Default:candidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 304,  480 => 285,  476 => 284,  465 => 276,  444 => 258,  440 => 257,  431 => 251,  410 => 233,  406 => 232,  397 => 226,  376 => 208,  372 => 207,  363 => 201,  342 => 183,  338 => 182,  329 => 176,  306 => 156,  302 => 155,  299 => 154,  293 => 150,  289 => 149,  286 => 148,  280 => 144,  276 => 143,  271 => 141,  262 => 135,  258 => 134,  247 => 126,  238 => 120,  234 => 119,  225 => 113,  216 => 107,  212 => 106,  203 => 100,  193 => 93,  189 => 92,  184 => 90,  179 => 88,  169 => 81,  160 => 75,  156 => 74,  145 => 66,  136 => 60,  132 => 59,  121 => 51,  112 => 45,  108 => 44,  98 => 37,  89 => 31,  85 => 30,  74 => 22,  70 => 20,  56 => 8,  50 => 5,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
