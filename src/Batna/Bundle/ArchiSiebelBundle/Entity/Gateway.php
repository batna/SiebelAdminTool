<?php

namespace Batna\Bundle\ArchiSiebelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batna\Bundle\ArchiSiebelBundle\Entity\Gateway
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Batna\Bundle\ArchiSiebelBundle\Entity\GatewayRepository")
 */
class Gateway
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
     * @var integer $host
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Host")
     */
    private $host;

    /**
     * @var integer $environnement
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Environnement")
     */
    private $environnement;

    /**
     * @var integer $bdd
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Bdd")
     */
    private $bdd;

    /**
     * To String
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->description;
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

    /**
     * Set environnement
     *
     * @param integer $environnement
     */
    public function setEnvironnement($environnement)
    {
        $this->environnement = $environnement;
    }

    /**
     * Get environnement
     *
     * @return integer 
     */
    public function getEnvironnement()
    {
        return $this->environnement;
    }

    /**
     * Set bdd
     *
     * @param integer $bdd
     */
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * Get bdd
     *
     * @return integer 
     */
    public function getBdd()
    {
        return $this->bdd;
    }
}
