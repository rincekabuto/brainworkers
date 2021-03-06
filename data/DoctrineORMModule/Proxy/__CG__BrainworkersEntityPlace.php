<?php

namespace DoctrineORMModule\Proxy\__CG__\Brainworkers\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Place extends \Brainworkers\Entity\Place implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'teamsMax', 'address', 'ip', 'contact', 'addMoney', 'videoState', 'eventVk', 'teams', 'city', 'created', 'updated', 'owner', 'approved');
        }

        return array('__isInitialized__', 'id', 'teamsMax', 'address', 'ip', 'contact', 'addMoney', 'videoState', 'eventVk', 'teams', 'city', 'created', 'updated', 'owner', 'approved');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Place $proxy) {
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
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', array());

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreUpdate', array());

        return parent::onPreUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreRemove', array());

        return parent::onPreRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function addTeams($teams)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTeams', array($teams));

        return parent::addTeams($teams);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTeams($teams)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTeams', array($teams));

        return parent::removeTeams($teams);
    }

    /**
     * {@inheritDoc}
     */
    public function setAddMoney($addMoney)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddMoney', array($addMoney));

        return parent::setAddMoney($addMoney);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddMoney()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddMoney', array());

        return parent::getAddMoney();
    }

    /**
     * {@inheritDoc}
     */
    public function setApproved($approved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApproved', array($approved));

        return parent::setApproved($approved);
    }

    /**
     * {@inheritDoc}
     */
    public function getApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproved', array());

        return parent::getApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', array($owner));

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', array());

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact($contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', array($contact));

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', array());

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventVk($eventVk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventVk', array($eventVk));

        return parent::setEventVk($eventVk);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventVk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventVk', array());

        return parent::getEventVk();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
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
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', array($ip));

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', array());

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeams($teams)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeams', array($teams));

        return parent::setTeams($teams);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeams', array());

        return parent::getTeams();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeamsMax($teamsMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeamsMax', array($teamsMax));

        return parent::setTeamsMax($teamsMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeamsMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeamsMax', array());

        return parent::getTeamsMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideoState($videoState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideoState', array($videoState));

        return parent::setVideoState($videoState);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideoState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideoState', array());

        return parent::getVideoState();
    }

}
