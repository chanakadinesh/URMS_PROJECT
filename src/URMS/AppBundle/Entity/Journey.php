<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journey
 *
 * @ORM\Table(name="journey", indexes={@ORM\Index(name="Vehical_Id", columns={"Vehical_Id"})})
 * @ORM\Entity
 */
class Journey
{
    /**
     * @var string
     *
     * @ORM\Column(name="Vehical_Id", type="string", length=10, nullable=false)
     */
    private $vehicalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_Time", type="time", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="End_Time", type="time", nullable=false)
     */
    private $endTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="Capacity", type="integer", nullable=false)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="Journey_Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $journeyId;



    /**
     * Set vehicalId
     *
     * @param string $vehicalId
     *
     * @return Journey
     */
    public function setVehicalId($vehicalId)
    {
        $this->vehicalId = $vehicalId;

        return $this;
    }

    /**
     * Get vehicalId
     *
     * @return string
     */
    public function getVehicalId()
    {
        return $this->vehicalId;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Journey
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Journey
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Journey
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
     * Get journeyId
     *
     * @return string
     */
    public function getJourneyId()
    {
        return $this->journeyId;
    }
}
