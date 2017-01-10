<?php

namespace Nod\CorporateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nod\CharacterBundle\Entity\Android;
use Nod\CorporateBundle\Entity\Work;
use Nod\CorporateBundle\Form\newWorkType;

class WorkController extends Controller
{
    
    public function indexAction(Request $request)
    {   
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
            if($user->getAndroid()==NULL |$user->getAndroid()=="") {
                $response = $this->redirect( $this->generateUrl('nod_Character_newandroid'));
                return $response;                
            }
            
            if($user->getAndroid()->getWork()==NULL |$user->getAndroid()->getWork()==""){
                $response = $this->redirect( $this->generateUrl('nod_Work_research'));
                return $response;  
            }
            return $this->render('NodCorporateBundle::work.html.twig');
        }
        return $this->render('nod/index.html.twig');
    }
    
    public function newAction(Request $request)
    {   if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
        
        if($user==true) {
        
        $em = $this->getDoctrine()->getManager();
 
        $work = new Work();    

        $form = $this->createForm(newWorkType::class,$work);    
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($work);
            $em->flush();
            
        return $this->redirect( $this->generateUrl('home'));
        }
        
        return $this->render('NodCorporateBundle::newWork.html.twig', array(
            'form' => $form->createView(),
        ));
        }}
        return $this->render('nod/index.html.twig');
        
    }
    public function researchAction(Request $request)
    {   
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
            if($user->getAndroid()==NULL |$user->getAndroid()=="") {
                $response = $this->redirect( $this->generateUrl('nod_Character_newandroid'));
                return $response;                
            }
            return $this->render('NodCorporateBundle::researchWork.html.twig');
        }
        return $this->render('nod/index.html.twig');
    }
    
    
}
