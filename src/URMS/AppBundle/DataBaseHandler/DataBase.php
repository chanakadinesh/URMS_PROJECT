<?php
namespace URMS\AppBundle\DataBaseHandler;
/**
 * Created by PhpStorm.
 * User: Chanaka
 * Date: 16/12/2015
 * Time: 4:48 PM
 */
use Doctrine\DBAL;
use Doctrine\DBAL\DriverManager;
use URMS\AppBundle\Entity\Driver;
class DataBase
{

    function getDbConnection(){
        $config=new \Doctrine\DBAL\Configuration();
        $params=array(
            'dbname'=>"urms_project",
            "user"=>"root",
            "password"=>"",
            "host"=>"localhost",
            "driver"=>"pdo_mysql",
        );
        $connection=DriverManager::getConnection($params,$config);
        return $connection;
    }
}