<?php

namespace URMS\AppBundle\Entity\New_entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Created by PhpStorm.
 * User: Wiranji Dinelka
 * Date: 12/14/2015
 * Time: 3:50 PM
 */
class Vehicle
{

    private $vehicalType;

    private $capacity;

    private $vehical;




    public function setVehicalType($vehicalType)
    {
        $this->vehicalType = $vehicalType;

        return $this;
    }


    public function getVehicalType()
    {
        return $this->vehicalType;
    }


    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }


    public function getCapacity()
    {
        return $this->capacity;
    }


    public function setVehical( $vehical)
    {
        $this->vehical = $vehical;

        return $this;
    }


    public function getVehical()
    {
        return $this->vehical;
    }
}