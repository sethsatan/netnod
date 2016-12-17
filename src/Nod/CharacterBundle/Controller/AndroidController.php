<?php

namespace Nod\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nod\CharacterBundle\Entity\Android;
use Nod\CharacterBundle\Form\newAndroidType;

class AndroidController extends Controller
{
    public function newAction(Request $request)
    {   if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
        if($user->getAndroid()==NULL |$user->getAndroid()=="") {
        
        $em = $this->getDoctrine()->getManager();
        
        $android = new Android();
        $android->setHumanity(1);
        $android->setMoney("100");
        $android->setDescription("");
        

        $form = $this->createForm(newAndroidType::class,$android);    
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($android);
            $user->setAndroid($android);
            $em->flush();
            
        return $this->redirect( $this->generateUrl('nod_Character_android'));
        }
        
        return $this->render('NodCharacterBundle::newAndroid.html.twig', array(
            'form' => $form->createView(),
        ));
        }}
        return $this->render('nod/index.html.twig');
        
    }
    
    public function indexAction(){
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            $user = $this->getUser();
            $name = $user->getAndroid()->getName();
            return $this->render('NodCharacterBundle::android.html.twig', array(
                'name'=>$name,
            ));
        }
        
    }        
}
