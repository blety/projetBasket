<?php

namespace Proxies\__CG__\Basket\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Equipe extends \Basket\DatabaseBundle\Entity\Equipe implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'id', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'annee', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'club', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'genre', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'joueur', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'categorie');
        }

        return array('__isInitialized__', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'id', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'annee', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'club', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'genre', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'joueur', '' . "\0" . 'Basket\\DatabaseBundle\\Entity\\Equipe' . "\0" . 'categorie');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Equipe $proxy) {
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
    public function setAnnee($annee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee', array($annee));

        return parent::setAnnee($annee);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee', array());

        return parent::getAnnee();
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
    public function addJoueur(\Basket\DatabaseBundle\Entity\Personne $joueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJoueur', array($joueur));

        return parent::addJoueur($joueur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJoueur(\Basket\DatabaseBundle\Entity\Personne $joueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJoueur', array($joueur));

        return parent::removeJoueur($joueur);
    }

    /**
     * {@inheritDoc}
     */
    public function getJoueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoueur', array());

        return parent::getJoueur();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Basket\DatabaseBundle\Entity\Categorie $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setClub($club)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClub', array($club));

        return parent::setClub($club);
    }

    /**
     * {@inheritDoc}
     */
    public function getClub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClub', array());

        return parent::getClub();
    }

}
