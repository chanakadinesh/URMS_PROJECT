<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student", indexes={@ORM\Index(name="Student_Id", columns={"Student_Id"})})
 * @ORM\Entity
 */
class Student
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contact_No", type="integer", nullable=true)
     */
    private $contactNo;

    /**
     * @var string
     *
     * @ORM\Column(name="NIC_No", type="string", length=10, nullable=false)
     */
    private $nicNo;

    /**
     * @var \URMS\AppBundle\Entity\Person
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Student_Id", referencedColumnName="User_Id")
     * })
     */
    private $student;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Student
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
     * Set address
     *
     * @param string $address
     *
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactNo
     *
     * @param integer $contactNo
     *
     * @return Student
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return integer
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set nicNo
     *
     * @param string $nicNo
     *
     * @return Student
     */
    public function setNicNo($nicNo)
    {
        $this->nicNo = $nicNo;

        return $this;
    }

    /**
     * Get nicNo
     *
     * @return string
     */
    public function getNicNo()
    {
        return $this->nicNo;
    }

    /**
     * Set student
     *
     * @param \URMS\AppBundle\Entity\Person $student
     *
     * @return Student
     */
    public function setStudent(\URMS\AppBundle\Entity\Person $student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \URMS\AppBundle\Entity\Person
     */
    public function getStudent()
    {
        return $this->student;
    }
}
