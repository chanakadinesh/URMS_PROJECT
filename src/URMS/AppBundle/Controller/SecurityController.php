<?php
namespace URMS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\LogoutException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use URMS\AppBundle\Entity\New_entity\HelpMe;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(){
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('URMSAppBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }
    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        //throw new UsernameNotFoundException();
        //throw new BadCredentialsException();
        throw new \Exception("Please Check User Name and Password Again...!");
    }

    public function logoutAction()
    {
    }

    public function helpMeAction(Request $request){
        $help=new HelpMe();
        $help->setReciever('chanakadkm@gmail.com');
        $help->setDate(new \DateTime());
        $form = $this->createFormBuilder($help)
            ->add('userIndex',TextType::class)
            ->add('senderEmail',TextType::class)
            ->add('subject',ChoiceType::class,array(
                'choices'=>$help->getSubjects()
            ))
            ->add('message',TextAreaType::class, array('required' => false))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('session')->getFlashBag()->add('submit-notice', 'Help me request sent.You will notify be email');
            return $this->redirectToRoute('security_login');
        }
        return $this->render('URMSAppBundle:Security:helpme.html.twig',
            array('form'=>$form->createView())
        );


    }
}

