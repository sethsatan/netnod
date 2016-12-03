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
     * @ORM\ManyToOne(targetEntity="Nod\CoporateBundle\Entity\Corporate", inversedBy="works")
     * @ORM\JoinColumn(name="corporate_id", referencedColumnName="id")
     */
    protected $corporate;
    
    /**
     * $androids.
     *
     * @ORM\OneToMany(targetEntity="Nod\AndroidBundle\Entity\Android", mappedBy="work")
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
     * @param \Nod\CoporateBundle\Entity\Corporate $corporate
     *
     * @return Work
     */
    public function setCorporate(\Nod\CoporateBundle\Entity\Corporate $corporate = null)
    {
        $this->corporate = $corporate;

        return $this;
    }

    /**
     * Get corporate
     *
     * @return \Nod\CoporateBundle\Entity\Corporate
     */
    public function getCorporate()
    {
        return $this->corporate;
    }
}
