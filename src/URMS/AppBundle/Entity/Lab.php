<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lab
 *
 * @ORM\Table(name="lab", indexes={@ORM\Index(name="Lab_No", columns={"Lab_No"})})
 * @ORM\Entity
 */
class Lab
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="Capacity", type="integer", nullable=false)
     */
    private $capacity;

    /**
     * @var \URMS\AppBundle\Entity\Resource
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Lab_No", referencedColumnName="Resource_Id")
     * })
     */
    private $labNo;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lab
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Lab
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set labNo
     *
     * @param \URMS\AppBundle\Entity\Resource $labNo
     *
     * @return Lab
     */
    public function setLabNo(\URMS\AppBundle\Entity\Resource $labNo)
    {
        $this->labNo = $labNo;

        return $this;
    }

    /**
     * Get labNo
     *
     * @return \URMS\AppBundle\Entity\Resource
     */
    public function getLabNo()
    {
        return $this->labNo;
    }
}
