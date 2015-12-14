<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRequest
 *
 * @ORM\Table(name="user_request", indexes={@ORM\Index(name="Request_Id", columns={"Request_Id"})})
 * @ORM\Entity
 */
class UserRequest
{
    /**
     * @var string
     *
     * @ORM\Column(name="User_Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var \URMS\AppBundle\Entity\Request
     *
     * @ORM\ManyToOne(targetEntity="URMS\AppBundle\Entity\Request")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Request_Id", referencedColumnName="Request_Id")
     * })
     */
    private $request;



    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set request
     *
     * @param \URMS\AppBundle\Entity\Request $request
     *
     * @return UserRequest
     */
    public function setRequest(\URMS\AppBundle\Entity\Request $request = null)
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
