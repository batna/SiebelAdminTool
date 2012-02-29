<?php

namespace Batna\Bundle\ArchiSiebelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batna\Bundle\ArchiSiebelBundle\Entity\Host
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Batna\Bundle\ArchiSiebelBundle\Entity\HostRepository")
 */
class Host
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
     * @var string $hostname
     *
     * @ORM\Column(name="hostname", type="string", length=32)
     */
    private $hostname;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="ip", type="string", length=39)
     */
    private $ip;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=1)
     */
    private $type;

    /**
     * @var string $os
     *
     * @ORM\Column(name="os", type="string", length=255)
     */
    private $os;

    /**
     * @var string $ram
     *
     * @ORM\Column(name="ram", type="string", length=32)
     */
    private $ram;

    /**
     * @var integer $cpuCore
     *
     * @ORM\Column(name="cpuCore", type="integer")
     */
    private $cpuCore;

    /**
     * @var string $cpuFrequency
     *
     * @ORM\Column(name="cpuFrequency", type="string", length=32)
     */
    private $cpuFrequency;

    /**
     * @var integer $parent
     *
     * @ORM\Column(name="parent", type="integer")
     */
    private $parent;


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
     * Set hostname
     *
     * @param string $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    
    /**
     * To String
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->hostname;
    }
    

    /**
     * Set ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set os
     *
     * @param string $oS
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set ram
     *
     * @param string $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * Get ram
     *
     * @return string 
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set cpuCore
     *
     * @param integer $cpuCore
     */
    public function setCpuCore($cpuCore)
    {
        $this->cpuCore = $cpuCore;
    }

    /**
     * Get cpuCore
     *
     * @return integer 
     */
    public function getCpuCore()
    {
        return $this->cpuCore;
    }

    /**
     * Set cpuFrequency
     *
     * @param string $cpuFrequency
     */
    public function setCpuFrequency($cpuFrequency)
    {
        $this->cpuFrequency = $cpuFrequency;
    }

    /**
     * Get cpuFrequency
     *
     * @return string 
     */
    public function getCpuFrequency()
    {
        return $this->cpuFrequency;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
