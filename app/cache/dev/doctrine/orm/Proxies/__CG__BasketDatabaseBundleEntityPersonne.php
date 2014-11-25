<?php

namespace Proxies\__CG__\Basket\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Personne extends \Basket\DatabaseBundle\Entity\Personne implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'id', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'nom', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'prenom', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'genre', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'adresse', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'adresseParents', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'mobile', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'tel', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'license', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'divers', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'refPersonne');
        }

        return array('__isInitialized__', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'id', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'nom', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'prenom', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'genre', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'adresse', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'adresseParents', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'mobile', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'tel', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'license', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'divers', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Personne' . "\0" . 'refPersonne');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Personne $proxy) {
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre($genre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', array($genre));

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', array());

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseParents($adresseParents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseParents', array($adresseParents));

        return parent::setAdresseParents($adresseParents);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseParents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseParents', array());

        return parent::getAdresseParents();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', array($mobile));

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', array());

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', array($tel));

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', array());

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicense($license)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicense', array($license));

        return parent::setLicense($license);
    }

    /**
     * {@inheritDoc}
     */
    public function getLicense()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicense', array());

        return parent::getLicense();
    }

    /**
     * {@inheritDoc}
     */
    public function setDivers($divers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDivers', array($divers));

        return parent::setDivers($divers);
    }

    /**
     * {@inheritDoc}
     */
    public function getDivers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDivers', array());

        return parent::getDivers();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefPersonne(\Basket\DatabaseBundle\Entity\RefPersonne $refPersonne = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefPersonne', array($refPersonne));

        return parent::setRefPersonne($refPersonne);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefPersonne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefPersonne', array());

        return parent::getRefPersonne();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}