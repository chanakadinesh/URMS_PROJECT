<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allocation
 *
 * @ORM\Table(name="allocation")
 * @ORM\Entity
 */
class Allocation
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_Date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="End_Date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Module_ID", type="string", length=20, nullable=true)
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Allocation_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allocationId;



    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Allocation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Allocation
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set moduleId
     *
     * @param string $moduleId
     *
     * @return Allocation
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Get allocationId
     *
     * @return integer
     */
    public function getAllocationId()
    {
        return $this->allocationId;
    }
}
