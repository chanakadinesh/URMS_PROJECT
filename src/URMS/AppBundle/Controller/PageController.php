<?php

namespace URMS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use URMS\AppBundle\DataBaseHandler\AddUserHandler;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('URMSAppBundle:Pages:index.html.twig');
    }
    public function sidebarAction(){
        return $this->render('URMSAppBundle:Pages:sidebar.html.twig');
    }

    public function dbTestAction(){
        $obj=new AddUserHandler();
        $msg=$obj->getUserRow();
        return $this->render("<html><body>$msg</body></html>");
    }
}

