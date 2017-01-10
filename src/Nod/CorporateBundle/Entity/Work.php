<?php

namespace Nod\CorporateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Work")
 */
class Work {
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
     * @ORM\Column(type="string")
     */
    
    protected $salary;
    
    /**
     * (Many-To-One)
     * @ORM\ManyToOne(targetEntity="Nod\CorporateBundle\Entity\Corporate", inversedBy="works")
     * @ORM\JoinColumn(name="corporate_id", referencedColumnName="id")
     */
    protected $corporate;
    
    /**
     * $androids.
     *
     * @ORM\OneToMany(targetEntity="Nod\CharacterBundle\Entity\Android", mappedBy="work")
     */
    protected $androids;

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
     * Set name
     *
     * @param string $name
     *
     * @return Work
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Work
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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
     * Set salary
     *
     * @param string $salary
     *
     * @return Work
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set corporate
     *
     * @param \Nod\CorporateBundle\Entity\Corporate $corporate
     *
     * @return Work
     */
    public function setCorporate(\Nod\CorporateBundle\Entity\Corporate $corporate = null)
    {
        $this->corporate = $corporate;

        return $this;
    }

    /**
     * Get corporate
     *
     * @return \Nod\CorporateBundle\Entity\Corporate
     */
    public function getCorporate()
    {
        return $this->corporate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->androids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add android
     *
     * @param \Nod\CharacterBundle\Entity\Android $android
     *
     * @return Work
     */
    public function addAndroid(\Nod\CharacterBundle\Entity\Android $android)
    {
        $this->androids[] = $android;

        return $this;
    }

    /**
     * Remove android
     *
     * @param \Nod\CharacterBundle\Entity\Android $android
     */
    public function removeAndroid(\Nod\CharacterBundle\Entity\Android $android)
    {
        $this->androids->removeElement($android);
    }

    /**
     * Get androids
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAndroids()
    {
        return $this->androids;
    }
}
