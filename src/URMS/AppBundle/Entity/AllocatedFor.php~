<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AllocatedFor
 *
 * @ORM\Table(name="allocated_for")
 * @ORM\Entity
 */
class AllocatedFor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Allocation_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $allocationId;

    /**
     * @var string
     *
     * @ORM\Column(name="Module_Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $moduleId;



    /**
     * Set allocationId
     *
     * @param integer $allocationId
     *
     * @return AllocatedFor
     */
    public function setAllocationId($allocationId)
    {
        $this->allocationId = $allocationId;

        return $this;
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

    /**
     * Set moduleId
     *
     * @param string $moduleId
     *
     * @return AllocatedFor
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
}
