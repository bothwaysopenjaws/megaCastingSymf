<?php

namespace Proxies\__CG__\MegaCastingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Offre extends \MegaCastingBundle\Entity\Offre implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'dateDebut', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'datePublication', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'intitule', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'utilisateur', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'isActive', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'duree', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'typeContrat', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'metier');
        }

        return array('__isInitialized__', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'dateDebut', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'datePublication', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'intitule', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'utilisateur', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'isActive', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'duree', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'typeContrat', '' . "\0" . 'MegaCastingBundle\\Entity\\Offre' . "\0" . 'metier');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Offre $proxy) {
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', array($dateDebut));

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', array());

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePublication($datePublication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePublication', array($datePublication));

        return parent::setDatePublication($datePublication);
    }

    /**
     * {@inheritDoc}
     */
    public function getdatePublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getdatePublication', array());

        return parent::getdatePublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', array($duree));

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', array());

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetier(\MegaCastingBundle\Entity\Metier $metier = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetier', array($metier));

        return parent::setMetier($metier);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetier', array());

        return parent::getMetier();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeContrat(\MegaCastingBundle\Entity\TypeContrat $typeContrat = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeContrat', array($typeContrat));

        return parent::setTypeContrat($typeContrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeContrat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeContrat', array());

        return parent::getTypeContrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntitule($intitule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntitule', array($intitule));

        return parent::setIntitule($intitule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntitule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntitule', array());

        return parent::getIntitule();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\MegaCastingBundle\Entity\Utilisateur $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

}
