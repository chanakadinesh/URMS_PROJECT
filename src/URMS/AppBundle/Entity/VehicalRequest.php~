<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicalRequest
 *
 * @ORM\Table(name="vehical_request", indexes={@ORM\Index(name="Request_Id", columns={"Request_Id"})})
 * @ORM\Entity
 */
class VehicalRequest
{
    /**
     * @var string
     *
     * @ORM\Column(name="Journey_Id", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $journeyId;

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
     * Set journeyId
     *
     * @param string $journeyId
     *
     * @return VehicalRequest
     */
    public function setJourneyId($journeyId)
    {
        $this->journeyId = $journeyId;

        return $this;
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

    /**
     * Set request
     *
     * @param \URMS\AppBundle\Entity\Request $request
     *
     * @return VehicalRequest
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
