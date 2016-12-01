<?php

namespace Nod\CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Android")
 */
class Android {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    
    protected $name;
    
    /**
     * @ORM\Column(type="text")
     */
    
    protected $description;
    
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $humanity;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $money;
    
    #/**
    # * (One-To-One)
    # * @ORM\OneToOne(targetEntity="Nod\CharacterBundle\Entity\Android")
    # * @ORM\JoinColumn(name="work", referencedColumnName="id")
    # */
    protected $work;
    
    
    
    
    
    
}

