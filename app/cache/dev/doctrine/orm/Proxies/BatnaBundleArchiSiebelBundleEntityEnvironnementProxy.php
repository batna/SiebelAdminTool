<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BatnaBundleArchiSiebelBundleEntityEnvironnementProxy extends \Batna\Bundle\ArchiSiebelBundle\Entity\Environnement implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setShortName($shortName)
    {
        $this->__load();
        return parent::setShortName($shortName);
    }

    public function getShortName()
    {
        $this->__load();
        return parent::getShortName();
    }

    public function setLongName($longName)
    {
        $this->__load();
        return parent::setLongName($longName);
    }

    public function getLongName()
    {
        $this->__load();
        return parent::getLongName();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setContexte($contexte)
    {
        $this->__load();
        return parent::setContexte($contexte);
    }

    public function getContexte()
    {
        $this->__load();
        return parent::getContexte();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'shortName', 'longName', 'description', 'contexte');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}