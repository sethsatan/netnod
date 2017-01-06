<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {   
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
            if($user->getAndroid()==NULL |$user->getAndroid()=="") {
                $response = $this->redirect( $this->generateUrl('nod_Character_newandroid'));
                return $response;                
            }
            return $this->redirect( $this->generateUrl('home'));
        }
        return $this->render('nod/index.html.twig');
    }
    public function testAction(Request $request)
    {
        return $this->render('default/test.html.twig');
    }
    
    public function homeAction(){
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            $android = $this->getUser()->getAndroid();
            $name = $android->getName();
            $humanity = $android->getHumanity();
            $money = $android->getMoney();
            $description = $android->getDescription();
            
            return $this->render('AppBundle::home.html.twig', array(
                'name'=>$name,
                'humanity'=>$humanity,
                'money'=>$money,
                'description'=>$description,
            ));
        }
        
    } 
}
