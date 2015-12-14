<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeAllocation
 *
 * @ORM\Table(name="time_allocation", indexes={@ORM\Index(name="Allocation_Id", columns={"Allocation_Id"})})
 * @ORM\Entity
 */
class TimeAllocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Slot_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $slotId;

    /**
     * @var \URMS\AppBundle\Entity\Allocation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Allocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Allocation_Id", referencedColumnName="Allocation_Id")
     * })
     */
    private $allocation;



    /**
     * Set slotId
     *
     * @param integer $slotId
     *
     * @return TimeAllocation
     */
    public function setSlotId($slotId)
    {
        $this->slotId = $slotId;

        return $this;
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

    /**
     * Set allocation
     *
     * @param \URMS\AppBundle\Entity\Allocation $allocation
     *
     * @return TimeAllocation
     */
    public function setAllocation(\URMS\AppBundle\Entity\Allocation $allocation)
    {
        $this->allocation = $allocation;

        return $this;
    }

    /**
     * Get allocation
     *
     * @return \URMS\AppBundle\Entity\Allocation
     */
    public function getAllocation()
    {
        return $this->allocation;
    }
}
