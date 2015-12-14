<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver
 *
 * @ORM\Table(name="driver")
 * @ORM\Entity
 */
class Driver
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="NIC_No", type="string", length=10, nullable=false)
     */
    private $nicNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contact_No", type="integer", nullable=true)
     */
    private $contactNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Driver_Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $driverId;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Driver
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
     * Set nicNo
     *
     * @param string $nicNo
     *
     * @return Driver
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
     * Set contactNo
     *
     * @param integer $contactNo
     *
     * @return Driver
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
     * Get driverId
     *
     * @return string
     */
    public function getDriverId()
    {
        return $this->driverId;
    }
}
