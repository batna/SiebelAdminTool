<?php

namespace Batna\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="fos_user")
  */
  
  class User extends BaseUser
  {
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
     
    /**
     * @ORM\Column(type="string", length="32")
     */
     private $name;
     
    /**
     * @ORM\Column(type="string", length="32")
     */
     private $surname;
     
     public function __construct()
     {
        parent::__construct();
     }
  }












?>
