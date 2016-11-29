<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Nod\PersonageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Androide
 *
 * @author dev
 *  
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
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
    
    
    
}

