<?php

namespace URMS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use URMS\AppBundle\DataBaseHandler\AddUserHandler;

use URMS\AppBundle\Form\HallType;
use Symfony\Component\HttpFoundation\Request;
use URMS\AppBundle\Entity\New_entity\HallSearch;
use URMS\AppBundle\DataBaseHandler\DataBase;
use URMS\AppBundle\Form\VehicleRequestType;
use URMS\AppBundle\Entity\New_entity\RequestVehicle;


class PageController extends Controller
{
    public function indexAction()
    {
        if($this->isGranted('IS_AUTHENTICATED_FULLY')){
        return $this->render('URMSAppBundle:Pages:index.html.twig');}
        else{
            return $this->redirectToRoute('security_login');
        }
    }

    public function sidebarAction(){
        return $this->render('URMSAppBundle:Pages:sidebar.html.twig');
    }

    public function getNotificationsCountAction(){
        $count=0;  //This should be taken from database.
        return $this->render('URMSAppBundle:Pages:notificationCount.html.twig',array('count'=>$count));
    }
    public function showNotificationAction(){
        /* Notfication should be taken form database
        User can delete some messages;
           After calling this once all the notifications should be marked as shown.
        */
    }
    public function showDriverAccountAction()
    {
        $repo=$this->getDoctrine()->getRepository('URMS\AppBundle\Entity\Driver');
        $query = "select * from driver";

        $Db=new Database();
        $Con=$Db->getDbConnection();
        $stmt=$Con->prepare($query);
        $stmt->execute();
        $new_drive = $stmt->fetchAll();


        //$new_drive=$repo->findAll();
        return $this->render('URMSAppBundle:Pages:view_driver_list.html.twig',array('drivers' => $new_drive));
    }

    public function hallTypeAction(Request $request)
    {
        $hall=new HallSearch();
        $form = $this->createForm(HallType::class, $hall);

        $form->handleRequest($request);
        $type=$hall ->getHallType();
        if ($form->isSubmitted() && $form->isValid()) {
            switch($type){
                case "LAB":
                    $query = 'SELECT Lab_No,Name,Capacity FROM lab';
                    break;
                case "LECTUREHALL":
                    $query = 'SELECT Hall_No,Name,Capacity FROM lecture_hall';
                    break;
                case "EXAMHALL":
                    $query = 'SELECT Exam_Hall_No,Name,Capacity FROM exam_hall';
                    break;
                default:
                    $query = 'SELECT Lab_No,Name,Capacity FROM lab';
                    break;

            }
                $Db = new Database();
                $Con = $Db->getDbConnection();
                $stm = $Con->prepare($query);
                $stm->execute();
                $hallList = $stm->fetchAll();
                return $this->render('URMSAppBundle:Pages:hall.html.twig', array('hallList' => $hallList,'type'=>$type));
        }

        return $this->render('URMSAppBundle:Pages:hallType.html.twig',
            array('form' => $form->createView())
        );
    }

    public function getVehicleListAction(Request $request){

        $Vrequest = new RequestVehicle();

        $form = $this->createForm(VehicleRequestType::class, $Vrequest);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $vehicleType = $Vrequest->getVehicleType();

            $query = "select * from vehical WHERE Vehical_Type = :vehicleType";

            $Db=new Database();
            $Con=$Db->getDbConnection();
            $stmt=$Con->prepare($query);
            $stmt->execute(array(':vehicleType'=>$Vrequest->getVehicleType()));
            $new_Vehical = $stmt->fetchAll();
            return $this->render('URMSAppBundle:User:View_Vehical_List.html.twig',array('vehicles' => $new_Vehical));
        }

        return $this->render('URMSAppBundle:User:RequestVehicle.html.twig',
            array('form' => $form->createView())
        );

    }


}

