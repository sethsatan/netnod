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
     * @ORM\OneToOne(targetEntity="Nod\CharacterBundle\Entity\Android", mappedBy="id")
     * @ORM\JoinColumn(name="android_id", referencedColumnName="id")
    */
    protected $android;
    
    
    
     public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set android.
     *
     * @param \Nod\CharacterBundle\Entity\Android
     *
     * @return User
     */
    public function setAndroid(\Nod\CharacterBundle\Entity\Android $android=null)
    {
        $this->android = $android;

        return $this;
    }

    /**
     * Get android.
     *
     * @return \Nod\CharacterBundle\Entity\Android
     */
    public function getAndroid()
    {
        return $this->android;
    }
}
