<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity
 */
class Login implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="Access_level", type="string", length=20, nullable=false)
     */
    private $accessLevel = 'ROLL_USER';


    /**
     * Set accessLevel
     *
     * @param string $accessLevel
     *
     * @return Login
     */
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


    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->userId,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->userId,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return array($this->getAccessLevel());
        // TODO: Implement getRoles() method.
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->userId;
    }
    public function setUsername($userId)
    {
        $this->userId=$userId;
        return $this;
    }


    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=70, nullable=false)
     */
    private $password;

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Login
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="User_Id", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;


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
     * Set userId
     *
     * @param string $userId
     *
     * @return Login
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
