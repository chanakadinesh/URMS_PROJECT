<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table(name="request")
 * @ORM\Entity
 */
class Request
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="Is_Admin_Accept", type="boolean", nullable=false)
     */
    private $isAdminAccept;

    /**
     * @var string
     *
     * @ORM\Column(name="Resource_Id", type="string", length=45, nullable=false)
     */
    private $resourceId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_Time", type="time", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="End_Time", type="time", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="Module_Id", type="string", length=20, nullable=true)
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Request_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requestId;



    /**
     * Set isAdminAccept
     *
     * @param boolean $isAdminAccept
     *
     * @return Request
     */
    public function setIsAdminAccept($isAdminAccept)
    {
        $this->isAdminAccept = $isAdminAccept;

        return $this;
    }

    /**
     * Get isAdminAccept
     *
     * @return boolean
     */
    public function getIsAdminAccept()
    {
        return $this->isAdminAccept;
    }

    /**
     * Set resourceId
     *
     * @param string $resourceId
     *
     * @return Request
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Get resourceId
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Request
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
     * @return Request
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
     * Set moduleId
     *
     * @param string $moduleId
     *
     * @return Request
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
     * Get requestId
     *
     * @return integer
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
}
