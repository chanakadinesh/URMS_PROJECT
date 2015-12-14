<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamHall
 *
 * @ORM\Table(name="exam_hall", indexes={@ORM\Index(name="Exam_Hall_No", columns={"Exam_Hall_No"})})
 * @ORM\Entity
 */
class ExamHall
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
     *   @ORM\JoinColumn(name="Exam_Hall_No", referencedColumnName="Resource_Id")
     * })
     */
    private $examHallNo;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ExamHall
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
     * @return ExamHall
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
     * Set examHallNo
     *
     * @param \URMS\AppBundle\Entity\Resource $examHallNo
     *
     * @return ExamHall
     */
    public function setExamHallNo(\URMS\AppBundle\Entity\Resource $examHallNo)
    {
        $this->examHallNo = $examHallNo;

        return $this;
    }

    /**
     * Get examHallNo
     *
     * @return \URMS\AppBundle\Entity\Resource
     */
    public function getExamHallNo()
    {
        return $this->examHallNo;
    }
}
