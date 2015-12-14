<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceOwnership
 *
 * @ORM\Table(name="resource_ownership", indexes={@ORM\Index(name="Contact_Person", columns={"Contact_Person"})})
 * @ORM\Entity
 */
class ResourceOwnership
{
    /**
     * @var string
     *
     * @ORM\Column(name="Faculty", type="string", length=55, nullable=true)
     */
    private $faculty;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=45, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerShip_Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ownershipId;

    /**
     * @var \URMS\AppBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="URMS\AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Contact_Person", referencedColumnName="User_Id")
     * })
     */
    private $contactPerson;



    /**
     * Set faculty
     *
     * @param string $faculty
     *
     * @return ResourceOwnership
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return string
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return ResourceOwnership
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Get ownershipId
     *
     * @return string
     */
    public function getOwnershipId()
    {
        return $this->ownershipId;
    }

    /**
     * Set contactPerson
     *
     * @param \URMS\AppBundle\Entity\Person $contactPerson
     *
     * @return ResourceOwnership
     */
    public function setContactPerson(\URMS\AppBundle\Entity\Person $contactPerson = null)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Get contactPerson
     *
     * @return \URMS\AppBundle\Entity\Person
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }
}
