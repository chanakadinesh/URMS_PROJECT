<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owns
 *
 * @ORM\Table(name="owns", indexes={@ORM\Index(name="OwnerShip_Id", columns={"OwnerShip_Id"}), @ORM\Index(name="Resource_Id", columns={"Resource_Id"})})
 * @ORM\Entity
 */
class Owns
{
    /**
     * @var string
     *
     * @ORM\Column(name="OwnerShip_Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ownershipId;

    /**
     * @var \URMS\AppBundle\Entity\Resource
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Resource_Id", referencedColumnName="Resource_Id")
     * })
     */
    private $resource;



    /**
     * Set ownershipId
     *
     * @param string $ownershipId
     *
     * @return Owns
     */
    public function setOwnershipId($ownershipId)
    {
        $this->ownershipId = $ownershipId;

        return $this;
    }

    /**
     * Get ownershipId
     *
     * @return string
     */
    public function getOwnershipId()
    {
        return $this->ownershipId;
    }

    /**
     * Set resource
     *
     * @param \URMS\AppBundle\Entity\Resource $resource
     *
     * @return Owns
     */
    public function setResource(\URMS\AppBundle\Entity\Resource $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return \URMS\AppBundle\Entity\Resource
     */
    public function getResource()
    {
        return $this->resource;
    }
}
