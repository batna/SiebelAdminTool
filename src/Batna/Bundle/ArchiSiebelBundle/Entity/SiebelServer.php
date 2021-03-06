<?php

namespace Batna\Bundle\ArchiSiebelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batna\Bundle\ArchiSiebelBundle\Entity\SiebelServer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Batna\Bundle\ArchiSiebelBundle\Entity\SiebelServerRepository")
 */
class SiebelServer
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
     * @var integer $port
     *
     * @ORM\Column(name="port", type="integer")
     */
    private $port;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer $enterprise
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\EnterpriseServer")
     */
    private $enterprise;

    /**
     * @var integer $host
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Host")
     */
    private $host;

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
     * Set port
     *
     * @param integer $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
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
     * Set enterprise
     *
     * @param integer $enterprise
     */
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;
    }

    /**
     * Get enterprise
     *
     * @return integer 
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }

    /**
     * Set host
     *
     * @param integer $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * Get host
     *
     * @return integer 
     */
    public function getHost()
    {
        return $this->host;
    }
}
