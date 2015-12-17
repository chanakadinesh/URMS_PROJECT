<?php
/**
 * Created by PhpStorm.
 * User: Chanaka
 * Date: 13/12/2015
 * Time: 10:38 PM
 */

namespace URMS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use URMS\AppBundle\DataBaseHandler\DataBase;
use URMS\AppBundle\Entity\Login;
use URMS\AppBundle\Entity\New_entity\AddUser;
use URMS\AppBundle\Entity\Person;
use URMS\AppBundle\Entity\New_entity\Hall;
use URMS\AppBundle\Entity\Lab;
use URMS\AppBundle\Entity\Resource;
use URMS\AppBundle\Form\VehicleType;
use URMS\AppBundle\Form\UserType;
use URMS\AppBundle\Form\DriverType;
use URMS\AppBundle\Form\ResourceType;
use URMS\AppBundle\Entity\Driver;
use URMS\AppBundle\Entity\New_entity\Vehicle;
use URMS\AppBundle\Entity\Vehical;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
class AdminController extends Controller
{
    public function addMasterAccountAction(Request $request){
        // 1) build the form
        $user = new Login();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('super_admin_addLoginAccount');
        }

        return $this->render('URMSAppBundle:Security:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function addUserAction(Request $request){
        $user = new AddUser();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $login=new Login();
            $password = $this->get('security.password_encoder')
                ->encodePassword($login, $user->getPassword());
            $user->setPassword($password);
            // 4) save the User!

            $login=new Login();
            $person=new Person();

            $login->setUserId($user->getUserId());
            $login->setAccessLevel($user->getAccessLevel());
            $login->setPassword($user->getPassword());

            $person->setUserId($user->getUserId());
            $person->setUserType($user->getUserType());
            $person->setName($user->getName());
            $person->setAddress($user->getAddress());
            $person->setContactNo($user->getContactNo());
            $person->setNicNo($user->getNicNo());

            $em = $this->getDoctrine()->getManager();
            $em->persist($login);
            $em->persist($person);
            $em->flush();

            $this->get('session')->getFlashBag()->add('submit-notice', 'Your enquiry was successfully sent. Thank you!');
            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('admin_addUser');
        }

        return $this->render('URMSAppBundle:Admin:adduser.html.twig',
            array('form' => $form->createView())
        );
    }

    public function addDriverAccountAction(Request $request){
        $drive=new Driver();
        $form = $this->createForm(DriverType::class, $drive);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $Db=new Database();
            $Con=$Db->getDbConnection();
            $sql="INSERT INTO driver (Driver_Id,Name,NIC_No,Contact_No) VALUES (?,?,?,?)";
            $stmt=$Con->prepare($sql);
            $stmt->bindValue(1,$drive->getDriverId());
            $stmt->bindValue(2,$drive->getName());
            $stmt->bindValue(3,$drive->getNicNo());
            $stmt->bindValue(4,$drive->getContactNo());
            $stmt->execute();

            $this->get('session')->getFlashBag()->add('submit-notice', 'Driver Adding Successful');
            return $this->redirectToRoute('admin_addDriver');
        }
        return $this->render('URMSAppBundle:Admin:add_driver.html.twig',
            array('form' => $form->createView())
        );
    }

    public function addHallAction(Request $request){

        $hall = new Hall();

        $lab = new Lab();
        $resource = new Resource();

        $form = $this->createForm(ResourceType::class, $hall);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $Db=new Database();
            $Con=$Db->getDbConnection();

            $sql1="INSERT INTO resource (Resource_Id,Type) VALUES (?,?)";
            $stmt1=$Con->prepare($sql1);
            $stmt1->bindValue(2,$hall->getType());
            $stmt1->bindValue(1,$hall->gethallNo());
            $stmt1->execute();

            switch($hall->getType()){
                case "EXAMHALL":
                    $sql="INSERT INTO exam_hall (Exam_Hall_No,Name,Capacity) VALUES (?,?,?)";
                    break;
                case "LECTUREHALL":
                    $sql="INSERT INTO lecture_hall (Hall_No,Name,Capacity) VALUES (?,?,?)";
                    break;
                case "LAB":
                    $sql="INSERT INTO lab (Lab_No,Name,Capacity) VALUES (?,?,?)";
                    break;
                default:
                    $sql="INSERT INTO exam_hall (Exam_Hall_No,Name,Capacity) VALUES (?,?,?)";
            }


            $stmt=$Con->prepare($sql);
            $stmt->bindValue(1,$hall->gethallNo());
            $stmt->bindValue(2,$hall->getName());
            $stmt->bindValue(3,$hall->getCapacity());
            $stmt->execute();



            return $this->redirectToRoute('admin_addHall');
        }



        return $this->render('URMSAppBundle:Pages:addHall.html.twig',
            array('form' => $form->createView())
        );
    }

    public function addVehicleAction(Request $request){
        // 1) build the form
        $user = new Vehicle();
        $vehicle= new Vehical();
        $resource = new Resource();

        $form = $this->createForm(VehicleType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $Db=new Database();
            $Con=$Db->getDbConnection();
            $sql="INSERT INTO vehical (Vehical_Id,Vehical_Type,Capacity) VALUES (?,?,?)";
            $sql2="INSERT INTO resource (Resource_Id,Type) VALUES (?,?)";

            $stmt=$Con->prepare($sql2);
            $stmt->bindValue(1,$user->getVehical());
            $stmt->bindValue(2,"vehicle");
            $stmt->execute();

            $stmt2=$Con->prepare($sql);
            $stmt2->bindValue(1,$user->getVehical());
            $stmt2->bindValue(2,$user->getVehicalType());
            $stmt2->bindValue(3,$user->getCapacity());
            $stmt2->execute();
//
//            $resource->setType("vehicle");
//            $resource->setResourceId($user->getVehical());
//
//            $vehicle ->setVehical($resource);
//            $vehicle ->setVehicalType($user ->getVehicalType());
//            $vehicle ->setCapacity($user ->getCapacity());
//
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($resource);
//            $em->persist($vehicle);
//            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('admin_addVehicle');
        }

        return $this->render('URMSAppBundle:Admin:addVehicle.html.twig',
            array('form' => $form->createView())
        );
    }

}