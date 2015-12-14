<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JourneyDriver
 *
 * @ORM\Table(name="journey_driver", indexes={@ORM\Index(name="Journey_Id", columns={"Journey_Id"})})
 * @ORM\Entity
 */
class JourneyDriver
{
    /**
     * @var string
     *
     * @ORM\Column(name="Driver_Id", type="string", length=10, nullable=false)
     */
    private $driverId;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehical_No", type="string", length=10, nullable=false)
     */
    private $vehicalNo;

    /**
     * @var \URMS\AppBundle\Entity\Journey
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Journey")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Journey_Id", referencedColumnName="Journey_Id")
     * })
     */
    private $journey;



    /**
     * Set driverId
     *
     * @param string $driverId
     *
     * @return JourneyDriver
     */
    public function setDriverId($driverId)
    {
        $this->driverId = $driverId;

        return $this;
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

    /**
     * Set vehicalNo
     *
     * @param string $vehicalNo
     *
     * @return JourneyDriver
     */
    public function setVehicalNo($vehicalNo)
    {
        $this->vehicalNo = $vehicalNo;

        return $this;
    }

    /**
     * Get vehicalNo
     *
     * @return string
     */
    public function getVehicalNo()
    {
        return $this->vehicalNo;
    }

    /**
     * Set journey
     *
     * @param \URMS\AppBundle\Entity\Journey $journey
     *
     * @return JourneyDriver
     */
    public function setJourney(\URMS\AppBundle\Entity\Journey $journey)
    {
        $this->journey = $journey;

        return $this;
    }

    /**
     * Get journey
     *
     * @return \URMS\AppBundle\Entity\Journey
     */
    public function getJourney()
    {
        return $this->journey;
    }
}
