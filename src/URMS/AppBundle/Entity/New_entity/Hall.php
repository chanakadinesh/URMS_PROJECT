<?php


namespace URMS\AppBundle\Entity\New_entity;

/**
 * Created by PhpStorm.
 * User: Madhavi Ruwandika
 * Date: 12/14/2015
 * Time: 3:43 PM
 */
class Hall
{

    private $name;
    private $capacity;
    private $hallNo;
    private $type;
    private $owner;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return hall
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return hall
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
     * Set hallNo
     *
     * @param \URMS\AppBundle\Entity\New_entity
     *
     * @return hall
     */
    public function sethallNo($hallNo)
    {
        $this->hallNo = $hallNo;

        return $this;
    }

    /**
     * Get hallNo
     *
     * @return \URMS\AppBundle\Entity\New_entity
     */
    public function gethallNo()
    {
        return $this->hallNo;
    }

    /**
     * Set hallNo
     *
     * @param \URMS\AppBundle\Entity\New_entity
     *
     * @return hall
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
     * Set owner
     *
     * @param string
     *
     * @return hall
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get getOwner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}