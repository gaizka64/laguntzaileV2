<?php

namespace laguntzaile\BenevolesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use laguntzaile\BenevolesBundle\Entity\Personne	;
use laguntzaile\BenevolesBundle\Entity\Affectation	;
use laguntzaile\BenevolesBundle\Entity\Disponibilite ;
use laguntzaile\BenevolesBundle\Form\PersonneType ;
use laguntzaile\BenevolesBundle\Form\DisponibiliteType ;
use laguntzaile\BenevolesBundle\Form\Evenement ;
use laguntzaile\BenevolesBundle\Form\AffectationType ;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Forms;



class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('laguntzaileBenevolesBundle:Default:index.html.twig', array('name' => $name));
    }

    
    
    
        
    public function candidatureAction($idEvenement,Request $requeteUtilisateur)
    {
        $enregistrementEffectue = FALSE; // Au départ, l'enregistrement en BD n'est pas fait
        
    // On vérifie si l'id Evenement en question existe dans la base de données
    $gestionnaireEntite = $this->getDoctrine()->getManager();
    $repositoryEvenement = $gestionnaireEntite->getRepository('laguntzaileBenevolesBundle:Evenement');
    
    $evenement = $repositoryEvenement->find($idEvenement);
    if($evenement == NULL)
    {
        return $this->render('laguntzaileBenevolesBundle:Default:erreur.html.twig');
    }
	
    // Création du formulaire
	$disponibilite = new Disponibilite();
	
	$formulaireInscription = $this->createForm(new DisponibiliteType(), $disponibilite);
    
	
	$formulaireInscription->handleRequest($requeteUtilisateur);

	if ($formulaireInscription->isValid())
	{
		$gestionnaireEntite = $this->getDoctrine()->getManager();
        $disponibilite->setIdEvenement($evenement);
        
     //$disponibilite->setDateInscription(new \DateTime("now"));
     $disponibilite->setDateInscription(new \DateTime(date('Y-m-d G:i:s')));

		$gestionnaireEntite->persist($disponibilite);
		$gestionnaireEntite->flush();
		$enregistrementEffectue = TRUE;
		
	return $this->render('laguntzaileBenevolesBundle:Default:candidatureEffectuee.html.twig', array('enregistrementEffectue'=> $enregistrementEffectue, 'evenement' => $evenement)); 
	}
	return $this->render('laguntzaileBenevolesBundle:Default:candidature.html.twig', array('formulaireInscription'=> $formulaireInscription->createView(),'enregistrementEffectue'=> $enregistrementEffectue, 'evenement' => $evenement));
     }
    
    
    
    
    
    
    public function erreurAction()
    {
        	return $this->render('laguntzaileBenevolesBundle:Default:erreur.html.twig');
    }
    
    
    

    
    
    
    
    
    
    
    public function affectationAction($idDisponibilite,Request $requeteUtilisateur)
    {
        // On vérifie si l'id affectation en question existe dans la base de données
        $gestionnaireEntite = $this->getDoctrine()->getManager();
        $repositoryAffectation = $gestionnaireEntite->getRepository('laguntzaileBenevolesBundle:Affectation');
        $repositoryDisponibilite = $gestionnaireEntite->getRepository('laguntzaileBenevolesBundle:Disponibilite');
        
        $disponibiliteCourante = $repositoryDisponibilite->find($idDisponibilite);
        
        // On Récupère la liste des Affectations qui sont proposées
        $tabAffectations = $repositoryAffectation->findBy(array("idDisponibilite" => $idDisponibilite, "statut" => "proposee"));
        
        
        
        
        
        /*if($tabAffectations == NULL)
        {
            return $this->render('laguntzaileBenevolesBundle:Default:erreur.html.twig');
        }*/
        
        // On se base sur l'identifiant de la disponibilité
        $personne=$disponibiliteCourante->getIdPersonne();
        $evenement=$disponibiliteCourante->getIdEvenement();
        
        // On va créer le formulaire
        $formulaireAffectation = $this->createFormBuilder($tabAffectations)
            ->add('tabAffectations', 'collection', array('type' => new AffectationType()))
            ->getForm();
        
        $formulaireAffectation->handleRequest($requeteUtilisateur);
        
        
   
	if ($formulaireAffectation->isValid())
    {
        
        $gestionnaireEntite = $this->getDoctrine()->getManager();
		$gestionnaireEntite->persist($disponibiliteCourante);
		$gestionnaireEntite->flush();
    }
        return $this->render('laguntzaileBenevolesBundle:Default:affectation.html.twig',array(
            'tabAffectations'=> $tabAffectations,
            'personne'=> $personne,
            'evenement' => $evenement,
            'formulaireAffectation'=> $formulaireAffectation->createView()));
    }
}