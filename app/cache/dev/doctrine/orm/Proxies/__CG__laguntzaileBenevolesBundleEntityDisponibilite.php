<?php

namespace Proxies\__CG__\laguntzaile\BenevolesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Disponibilite extends \laguntzaile\BenevolesBundle\Entity\Disponibilite implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'id', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'dateInscription', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'joursEtHeuresDispo', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'listeAmis', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'typePoste', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'commentaire', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'statut', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'idPersonne', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'idEvenement');
        }

        return array('__isInitialized__', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'id', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'dateInscription', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'joursEtHeuresDispo', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'listeAmis', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'typePoste', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'commentaire', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'statut', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'idPersonne', '' . "\0" . 'laguntzaile\\BenevolesBundle\\Entity\\Disponibilite' . "\0" . 'idEvenement');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Disponibilite $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscription($dateInscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscription', array($dateInscription));

        return parent::setDateInscription($dateInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscription', array());

        return parent::getDateInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setJoursEtHeuresDispo($joursEtHeuresDispo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJoursEtHeuresDispo', array($joursEtHeuresDispo));

        return parent::setJoursEtHeuresDispo($joursEtHeuresDispo);
    }

    /**
     * {@inheritDoc}
     */
    public function getJoursEtHeuresDispo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoursEtHeuresDispo', array());

        return parent::getJoursEtHeuresDispo();
    }

    /**
     * {@inheritDoc}
     */
    public function setListeAmis($listeAmis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListeAmis', array($listeAmis));

        return parent::setListeAmis($listeAmis);
    }

    /**
     * {@inheritDoc}
     */
    public function getListeAmis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeAmis', array());

        return parent::getListeAmis();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypePoste($typePoste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypePoste', array($typePoste));

        return parent::setTypePoste($typePoste);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypePoste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypePoste', array());

        return parent::getTypePoste();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentaire($commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentaire', array($commentaire));

        return parent::setCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', array());

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut($statut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', array($statut));

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', array());

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPersonne(\laguntzaile\BenevolesBundle\Entity\Personne $idPersonne = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPersonne', array($idPersonne));

        return parent::setIdPersonne($idPersonne);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPersonne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPersonne', array());

        return parent::getIdPersonne();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEvenement(\laguntzaile\BenevolesBundle\Entity\Evenement $idEvenement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEvenement', array($idEvenement));

        return parent::setIdEvenement($idEvenement);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEvenement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEvenement', array());

        return parent::getIdEvenement();
    }

}
