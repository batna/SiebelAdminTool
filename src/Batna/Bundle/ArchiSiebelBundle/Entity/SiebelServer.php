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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=32)
     */
    private $nom;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer $enterprise
     *
     * @ORM\ManyToOne(targetEntity="EnterpriseServer")
     */
    private $enterprise;

    /**
     * @var integer $machine
     *
     * @ORM\ManyToOne(targetEntity="Machine")
     */
    private $machine;


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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
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
     * Set machine
     *
     * @param integer $machine
     */
    public function setMachine($machine)
    {
        $this->machine = $machine;
    }

    /**
     * Get machine
     *
     * @return integer 
     */
    public function getMachine()
    {
        return $this->machine;
    }
}