<?php 

namespace laguntzaile\BenevolesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use laguntzaile\BenevolesBundle\Entity\Affectation;
use laguntzaile\BenevolesBundle\Entity\Disponibilite;
use laguntzaile\BenevolesBundle\Entity\Evenement;
use laguntzaile\BenevolesBundle\Entity\Personne;
use laguntzaile\BenevolesBundle\Entity\Poste;
use laguntzaile\BenevolesBundle\Entity\Tour;

class ChargerBd implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // Evenement
        $evenement1 = new Evenement();
        $evenement1->setNom('Lurrama 2015');
        $evenement1->setArchive(false);
        $evenement1->setDebut(new \DateTime('2015-05-10 09:00:00'));
        $evenement1->setFin(new \DateTime('2015-05-15 18:00:00'));
        $evenement1->setLieu('Biarritz');
        $evenement1->setPlan('unPlan');

        $manager->persist($evenement1);
        
        
        
        // Poste
        $poste = new Poste();
        $poste->setNom('Garde de nuit');
        $poste->setDescription('Les bénévoles de la garde de nuit s\' engagent...');
        $poste->setPosition('(12;17)');
        $poste->setIdEvenement($evenement1);
        
        $manager->persist($poste);
        
        // Poste 1
        $poste1 = new Poste();
        $poste1->setNom('Talo');
        $poste1->setDescription('Préparer les talos');
        $poste1->setPosition('(12;18)');
        $poste1->setIdEvenement($evenement1);
        
        $manager->persist($poste1);
        
        //Tours
        $tour = new Tour();
        $tour->setDebut(new \DateTime('2015-05-10 21:00:00'));
        $tour->setFin(new \DateTime('2015-05-10 23:00:00'));
        $tour->setMin(2);
        $tour->setMax(5);
        $tour->setIdPoste($poste);
        
        $manager->persist($tour);
                     
        $tour1 = new Tour();
        $tour1->setDebut(new \DateTime('2015-05-10 23:00:00'));
        $tour1->setFin(new \DateTime('2015-05-11 02:00:00'));
        $tour1->setMin(2);
        $tour1->setMax(5);
        $tour1->setIdPoste($poste);
        
        $manager->persist($tour1);
                      
        $tour2 = new Tour();
        $tour2->setDebut(new \DateTime('2015-05-10 10:00:00'));
        $tour2->setFin(new \DateTime('2015-05-11 11:00:00'));
        $tour2->setMin(2);
        $tour2->setMax(5);
        $tour2->setIdPoste($poste1);
                      
        $manager->persist($tour2);
        
        $tour3 = new Tour();
        $tour3->setDebut(new \DateTime('2015-05-10 09:00:00'));
        $tour3->setFin(new \DateTime('2015-05-11 10:00:00'));
        $tour3->setMin(2);
        $tour3->setMax(5);
        $tour3->setIdPoste($poste1);
                      
        $manager->persist($tour3);
        
         // Personne
        
        $personne = new Personne();
        $personne->setNom("Alçuyet");
        $personne->setPrenom("Gaizka");
        $personne->setAdresse("55 rue mirambeau");
        $personne->setCodePostal("95000");
        $personne->setVille("Anglet");
        $personne->setPortable("0625452157");
        $personne->setDomicile("0565854775");
        $personne->setEmail("gaizkaalcuyet@tata.fr");
        $personne->setDateNaissance(new \DateTime("01/07/1995"));
        $personne->setProfession("Enseignant chercher");
        $personne->setCompetences("Informatique");
        $personne->setLangues("Basque Français Créole");
        $personne->setCommentaire("J'aime la pâté");
        
        $manager->persist($personne);
        
        
      // Disponibilité
        
        $disponibilite = new Disponibilite();
        $disponibilite->setDateInscription(new \DateTime());
        $disponibilite->setJoursEtHeuresDispo("Demain");
        $disponibilite->setStatut("proposee");
        $disponibilite->setIdPersonne($personne);
        $disponibilite->setIdEvenement($evenement1);
        
        $manager->persist($disponibilite);
        
        // Affectation
        $affectation1 = new Affectation();
        $affectation1->setStatut("proposee");
        $affectation1->setDateEtHeureProposee(new \DateTime());
        $affectation1->setIdDisponibilite($disponibilite);
        $affectation1->setIdTour($tour);
        $affectation1->setCommentaire("");
        
        $manager->persist($affectation1);
        
        $affectation2 = new Affectation();
        $affectation2->setStatut("proposee");
        $affectation2->setDateEtHeureProposee(new \DateTime());
        $affectation2->setIdDisponibilite($disponibilite);
        $affectation2->setIdTour($tour1);
        $affectation2->setCommentaire("");
        
        $manager->persist($affectation2);
        
        $affectation3 = new Affectation();
        $affectation3->setStatut("proposee");
        $affectation3->setDateEtHeureProposee(new \DateTime());
        $affectation3->setIdDisponibilite($disponibilite);
        $affectation3->setIdTour($tour2);
        $affectation3->setCommentaire("");
        
        $manager->persist($affectation3);
        
        $affectation4 = new Affectation();
        $affectation4->setStatut("proposee");
        $affectation4->setDateEtHeureProposee(new \DateTime());
        $affectation4->setIdDisponibilite($disponibilite);
        $affectation4->setIdTour($tour3);
        $affectation4->setCommentaire("");
        
        $manager->persist($affectation4);
            
    $manager->flush();
    }
}