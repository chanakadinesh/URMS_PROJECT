<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehical
 *
 * @ORM\Table(name="vehical", indexes={@ORM\Index(name="Vehical_Id", columns={"Vehical_Id"})})
 * @ORM\Entity
 */
class Vehical
{
    /**
     * @var string
     *
     * @ORM\Column(name="Vehical_Type", type="string", length=45, nullable=false)
     */
    private $vehicalType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Capacity", type="integer", nullable=false)
     */
    private $capacity;

    /**
     * @var \URMS\AppBundle\Entity\Resource
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vehical_Id", referencedColumnName="Resource_Id")
     * })
     */
    private $vehical;



    /**
     * Set vehicalType
     *
     * @param string $vehicalType
     *
     * @return Vehical
     */
    public function setVehicalType($vehicalType)
    {
        $this->vehicalType = $vehicalType;

        return $this;
    }

    /**
     * Get vehicalType
     *
     * @return string
     */
    public function getVehicalType()
    {
        return $this->vehicalType;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Vehical
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set vehical
     *
     * @param \URMS\AppBundle\Entity\Resource $vehical
     *
     * @return Vehical
     */
    public function setVehical(\URMS\AppBundle\Entity\Resource $vehical)
    {
        $this->vehical = $vehical;

        return $this;
    }

    /**
     * Get vehical
     *
     * @return \URMS\AppBundle\Entity\Resource
     */
    public function getVehical()
    {
        return $this->vehical;
    }
}
