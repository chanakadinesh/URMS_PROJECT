<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LectureHall
 *
 * @ORM\Table(name="lecture_hall", indexes={@ORM\Index(name="Hall_No", columns={"Hall_No"}), @ORM\Index(name="Hall_No_2", columns={"Hall_No"})})
 * @ORM\Entity
 */
class LectureHall
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
     *   @ORM\JoinColumn(name="Hall_No", referencedColumnName="Resource_Id")
     * })
     */
    private $hallNo;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return LectureHall
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
     * @return LectureHall
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
     * Set hallNo
     *
     * @param \URMS\AppBundle\Entity\Resource $hallNo
     *
     * @return LectureHall
     */
    public function setHallNo(\URMS\AppBundle\Entity\Resource $hallNo)
    {
        $this->hallNo = $hallNo;

        return $this;
    }

    /**
     * Get hallNo
     *
     * @return \URMS\AppBundle\Entity\Resource
     */
    public function getHallNo()
    {
        return $this->hallNo;
    }
}
