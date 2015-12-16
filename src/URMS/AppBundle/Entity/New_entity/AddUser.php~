<?php
namespace URMS\AppBundle\Entity\New_entity;

/**
 * Created by PhpStorm.
 * User: Chanaka
 * Date: 14/12/2015
 * Time: 3:53 PM
 */
use Doctrine\ORM\Mapping as ORM;

/**
 * AddUser
 *
 * @ORM\Entity
 */
class AddUser
{
    /**
     * @var string
     *
     *
     */
    private $userType;
    /**
     * @var string
     *
     */
    private $name;
    /**
     * @var string
     *
     *
     */
    private $address;
    /**
     * @var integer
     *
     *
     */
    private $contactNo;
    /**
     * @var string
     *
     *
     */
    private $nicNo;
    /**
     * @var string
     *
     *
     */
    private $userId;
    /**
     * @var string
     *
     */
    private $accessLevel = 'ROLL_USER';
    /**
     * @var string
     *
     */
    private $password;
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }
    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

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

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }
    /**
     * Get contactNo
     *
     * @return integer
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    public function setNicNo($nicNo)
    {
        $this->nicNo = $nicNo;

        return $this;
    }
    /**
     * Get nicNo
     *
     * @return string
     */
    public function getNicNo()
    {
        return $this->nicNo;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId){
        $this->userId=$userId;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }
    /**
     * Get accessLevel
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

}
