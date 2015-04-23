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
            <h4 class=\"centrer\">Candidature pour l'événement ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "nom", array()), "html", null, true);
        echo "</h4>
        
        

            
        <form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), 'enctype');
        echo ">
            
        <div id=\"colone1\" class=\"col-md-7\">
            
            <table class=\"table\">
                <thead>
                  <tr>
                      <th class=\"centrer\" colspan=\"2\"><h4><br/>A propos de vous <br/></h4></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'label');
        echo " (requis)
                        <br />
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'errors');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "nom", array()), 'widget');
        echo "
                      </td>
                      <td> 
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'label');
        echo " (requis)
                        <br />
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'errors');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "prenom", array()), 'widget');
        echo "
                      </td>
                  </tr>
                    <tr>
                        <td class=\"centrer\" colspan=\"2\">
                            <strong>Pour vous contacter</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'label');
        echo "
                            <br />
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'errors');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "adresse", array()), 'widget');
        echo "
                            <br />
                            <span class=\"gauche\">
                                <h6>Code Postal</h6>
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "codePostal", array()), 'errors');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "codePostal", array()), 'widget');
        echo " 
                                &nbsp &nbsp &nbsp
                            </span>
                                
                            <h6>Commune</h6>
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "ville", array()), 'errors');
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "ville", array()), 'widget');
        echo " 
                        </td>
                        <td>
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'label');
        echo "    
                            <br />
                           ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'widget');
        echo "
                           ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "email", array()), 'errors');
        echo "
                            <br />

                           ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'label');
        echo "
                            <br />
                           ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'errors');
        echo "
                           ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "portable", array()), 'widget');
        echo "
                            <br />
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'label');
        echo "
                      <br />
                      ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'errors');
        echo "
                      ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "domicile", array()), 'widget');
        echo " 
                            
                        </td>
                    </tr>
                    <tr>
                        <td class=\"centrer\" colspan=\"2\"><strong>Pour en savoir plus sur vous</strong></td>
                    </tr>
                    <tr>
                        <td>
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'label');
        echo "
                            <br />
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'errors');
        echo "
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "profession", array()), 'widget');
        echo " 
                        </td>
                        <td>
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), 'label');
        echo "
                        <br />
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "day", array()), 'widget', array("attr" => array("size" => "2")));
        echo "
                        /
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "month", array()), 'widget', array("attr" => array("size" => "2")));
        echo "
                        /
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), "year", array()), 'widget', array("attr" => array("size" => "4")));
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "dateNaissance", array()), 'errors');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'label');
        echo "    
                            <br />
                            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'errors');
        echo "
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "competences", array()), 'widget');
        echo " 
                        </td>
                        <td>
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'label');
        echo " 
                            <br />
                            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'errors');
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "langues", array()), 'widget');
        echo " 
                        </td>
                    </tr>
                    
                    <tr>
                        <td width=\"10%\">
                            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "commentaire", array()), 'label');
        echo "
                        </td>
                        <td>
                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "commentaire", array()), 'errors');
        echo "
                            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "idPersonne", array()), "commentaire", array()), 'widget');
        echo " 
                        
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
            

        <div id=\"colone2\" class=\"col-md-3\">
            <table class=\"table\">
                <thead>
                  <tr>
                      <th class=\"centrer\"><h4>Spécifiquement <br /> pour cet événement</th></h4>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'label');
        echo "
                        <br />
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'errors');
        echo "
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "joursEtHeuresDispo", array()), 'widget');
        echo "     
                    </td>
                  </tr>
                  <tr>
                      <td>
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'label');
        echo "
                        <br />
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'errors');
        echo "
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "listeAmis", array()), 'widget');
        echo "    
                      </td>   
                  </tr>
                    <tr>
                        <td>
                            ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'label');
        echo "
                            <br /> 
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'errors');
        echo "
                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "typePoste", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'label');
        echo "
                            <br />
                            ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'errors');
        echo "
                            ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), "commentaire", array()), 'widget');
        echo " 
                        </td>
                    </tr>
                    <tr>
                        <td>
               
                            ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaireInscription"]) ? $context["formulaireInscription"] : $this->getContext($context, "formulaireInscription")), 'rest');
        echo "
                            <span class=\"pourBougerBouton\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer !\"/>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
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
        return array (  377 => 173,  368 => 167,  364 => 166,  359 => 164,  351 => 159,  347 => 158,  342 => 156,  334 => 151,  330 => 150,  325 => 148,  317 => 143,  313 => 142,  308 => 140,  285 => 120,  281 => 119,  275 => 116,  266 => 110,  262 => 109,  257 => 107,  251 => 104,  247 => 103,  242 => 101,  234 => 96,  230 => 95,  225 => 93,  220 => 91,  215 => 89,  209 => 86,  205 => 85,  200 => 83,  188 => 74,  184 => 73,  179 => 71,  174 => 69,  170 => 68,  165 => 66,  159 => 63,  155 => 62,  150 => 60,  144 => 57,  140 => 56,  132 => 51,  128 => 50,  121 => 46,  117 => 45,  112 => 43,  98 => 32,  94 => 31,  89 => 29,  83 => 26,  79 => 25,  74 => 23,  58 => 10,  50 => 5,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
