<?php

namespace Nod\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * (One-To-One)
     * @ORM\OneToOne(targetEntity="Nod\CharacterBundle\Entity\Android")
     * @ORM\JoinColumn(name="android", referencedColumnName="id")
    */
    protected $android;
}
