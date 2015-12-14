<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeSlot
 *
 * @ORM\Table(name="time_slot")
 * @ORM\Entity
 */
class TimeSlot
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Time_Period", type="time", nullable=false)
     */
    private $timePeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="Day", type="string", length=20, nullable=false)
     */
    private $day;

    /**
     * @var integer
     *
     * @ORM\Column(name="Slot_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slotId;



    /**
     * Set timePeriod
     *
     * @param \DateTime $timePeriod
     *
     * @return TimeSlot
     */
    public function setTimePeriod($timePeriod)
    {
        $this->timePeriod = $timePeriod;

        return $this;
    }

    /**
     * Get timePeriod
     *
     * @return \DateTime
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return TimeSlot
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Get slotId
     *
     * @return integer
     */
    public function getSlotId()
    {
        return $this->slotId;
    }
}
