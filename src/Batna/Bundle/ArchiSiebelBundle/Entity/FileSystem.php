<?php

namespace Batna\Bundle\ArchiSiebelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batna\Bundle\ArchiSiebelBundle\Entity\FileSystem
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Batna\Bundle\ArchiSiebelBundle\Entity\FileSystemRepository")
 */
class FileSystem
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
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var integer $host
     *
     * @ORM\ManyToOne(targetEntity="Batna\Bundle\ArchiSiebelBundle\Entity\Host")
     */
    private $host;
    
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
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
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
