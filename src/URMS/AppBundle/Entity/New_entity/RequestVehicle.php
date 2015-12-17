<?php
/**
 * Created by PhpStorm.
 * User: Madhavi Ruwandika
 * Date: 12/16/2015
 * Time: 9:38 PM
 */

namespace URMS\AppBundle\Entity\New_entity;


class RequestVehicle
{
    private $VehicleType;
   /*
    private $Date;
    private $Route;
    private $Capacity;
    */
    public function getVehicleType(){
        return $this->VehicleType;
    }

    public function setVehicleType($vehicleType){
        $this->VehicleType = $vehicleType;
        return $this;
    }

    /*
    public function getDate(){
        return $this->VehicleType;
    }

    public function setDate($date){
        $this->Date = $date;
        return $this;
    }
    public function getRoute(){
        return $this->Route;
    }

    public function setRoute($route){
        $this->Route = $route;
        return $this;
    }

    public function getCapacity(){
        return $this->Route;
    }

    public function setCapacity($Capacity){
        $this->Capacity = $Capacity;
        return $this;
    }

    */
}