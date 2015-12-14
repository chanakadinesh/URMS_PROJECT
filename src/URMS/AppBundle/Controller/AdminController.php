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
use URMS\AppBundle\Entity\Login;
use URMS\AppBundle\Form\UserType;
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
    public function addUserAction(){

    }
}