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
     * @ORM\Column(type="string")
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
     * @ORM\Column(type="string")
     */
    protected $money;
    
    /**
     * (Many-To-One)
     * @ORM\ManyToOne(targetEntity="Nod\CoporateBundle\Entity\Work", inversedBy="androids")
     * @ORM\JoinColumn(name="work_id", referencedColumnName="id")
     */
    protected $work;
    
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
     * Set name.
     *
     * @param string $name
     *
     * @return Android
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set description.
     *
     * @param text $description
     *
     * @return Android
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get descriptione.
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }
    
   /**
     * Set humanity.
     *
     * @param int $humanity
     *
     * @return Android
     */
    public function setHumanity($humanity)
    {
        $this->humanity = $humanity;

        return $this;
    }

    /**
     * Get humanity.
     *
     * @return int
     */
    public function getHumanity()
    {
        return $this->humanity;
    }
    
     /**
     * Set money.
     *
     * @param int $money
     *
     * @return Android
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money.
     *
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }
    
    
}

