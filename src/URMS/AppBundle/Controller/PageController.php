<?php

namespace URMS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('URMSAppBundle:Pages:index.html.twig');
    }
    public function sidebarAction(){
        return $this->render('URMSAppBundle:Pages:sidebar.html.twig');
    }
}

