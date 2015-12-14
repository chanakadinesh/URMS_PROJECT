<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceAllocation
 *
 * @ORM\Table(name="resource_allocation", indexes={@ORM\Index(name="Request_Id", columns={"Request_Id"}), @ORM\Index(name="Request_Id_2", columns={"Request_Id"})})
 * @ORM\Entity
 */
class ResourceAllocation
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
     * @var \URMS\AppBundle\Entity\Request
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Request")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Request_Id", referencedColumnName="Request_Id")
     * })
     */
    private $request;



    /**
     * Set allocationId
     *
     * @param integer $allocationId
     *
     * @return ResourceAllocation
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
     * Set request
     *
     * @param \URMS\AppBundle\Entity\Request $request
     *
     * @return ResourceAllocation
     */
    public function setRequest(\URMS\AppBundle\Entity\Request $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return \URMS\AppBundle\Entity\Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
