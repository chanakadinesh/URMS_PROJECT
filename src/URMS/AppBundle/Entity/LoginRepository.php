<?php
/**
 * Created by PhpStorm.
 * User: Chanaka
 * Date: 1/1/2016
 * Time: 9:53 PM
 */

namespace URMS\AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use URMS\AppBundle\DataBaseHandler\DataBase;
use Doctrine\ORM\EntityRepository;

class LoginRepository extends EntityRepository implements UserLoaderInterface
{

    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        $query = "select l.User_Id,l.Password,u.role from login l,user_role u where l.user_role=u.Id and l.User_Id=:username";

        $Db=new Database();
        $Con=$Db->getDbConnection();
        $stmt=$Con->prepare($query);
        $stmt->execute(array(':username'=>$username));
        $table = $stmt->fetch();


        if($table['User_Id']===null){
            $message = sprintf(
                'Username or Password Incorrect'
            );
            throw new UsernameNotFoundException($message);
        }
        $user=new Login();
        $user->setUserId($table['User_Id']);
        $user->setPassword($table['Password']);
        $user->setRole($table['role']);

        return $user;
    }
}