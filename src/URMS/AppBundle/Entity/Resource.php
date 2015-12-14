<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource", indexes={@ORM\Index(name="Resource_Id", columns={"Resource_Id"})})
 * @ORM\Entity
 */
class Resource
{
    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Resource_Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resourceId;



    /**
     * Set type
     *
     * @param string $type
     *
     * @return Resource
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
}
