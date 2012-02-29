<?php

namespace Batna\Bundle\ArchiSiebelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batna\Bundle\ArchiSiebelBundle\Entity\EnterpriseServer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Batna\Bundle\ArchiSiebelBundle\Entity\EnterpriseServerRepository")
 */
class EnterpriseServer
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $logicalName
     *
     * @ORM\Column(name="logicalName", type="string", length=255)
     */
    private $logicalName;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer $gateway
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Gateway")
     */
    private $gateway;


    /**
     * To String
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->logicalName;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set logicalName
     *
     * @param string $logicalName
     */
    public function setLogicalName($logicalName)
    {
        $this->logicalName = $logicalName;
    }

    /**
     * Get logicalName
     *
     * @return string 
     */
    public function getLogicalName()
    {
        return $this->logicalName;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set gateway
     *
     * @param integer $gateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * Get gateway
     *
     * @return integer 
     */
    public function getGateway()
    {
        return $this->gateway;
    }
}
