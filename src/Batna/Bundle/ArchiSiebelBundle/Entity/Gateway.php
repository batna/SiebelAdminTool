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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=32)
     */
    private $nom;

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
     * To String
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->nom;
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
