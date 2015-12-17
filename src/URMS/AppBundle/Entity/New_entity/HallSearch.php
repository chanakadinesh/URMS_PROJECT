<?php
/**
 * Created by PhpStorm.
 * User: Wiranji Dinelka
 * Date: 12/16/2015
 * Time: 7:06 PM
 */

namespace URMS\AppBundle\Entity\New_entity;


class HallSearch
{
    private $Hall_Type;
    private $Hall_Name;
    private $Capacity;
    private $Start_Time;
    private $End_Time;
    private $Date;


    public function setHallType($Hall_Type)
    {
        $this->Hall_Type = $Hall_Type;

        return $this;
    }


    public function getHallType()
    {
        return $this->Hall_Type;
    }


    public function setHallName($Hall_Name)
    {
        $this->Hall_Name = $Hall_Name;
        return $this;
    }

    public function getHallName()
    {
        return $this->Hall_Name;
    }

    public function getcapacity()
    {
        return $this->Capacity;
    }

    public function setcapacity($Capacity)
    {
        $this->Capacity = $Capacity;
        return $this;
    }



    public function getStartTime()
    {
        return $this->Start_Time;
    }


    public function setStartTime($Start_Time)
    {
        $this->Start_Time = $Start_Time;
        return $this;
    }

    public function getEndTime()
    {
        return $this->End_Time;
    }

    public function setEndTime($End_Time)
    {
        $this->End_Time = $End_Time;
        return $this;
    }

    public function getdate()
    {
        return $this->Date;
    }


    public function setdate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

}