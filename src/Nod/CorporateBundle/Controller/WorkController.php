<?php

namespace Nod\CorporateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nod\CorporateBundle\Entity\Work;
use Nod\CorporateBundle\Form\newWorkType;

class WorkController extends Controller
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
            
            if($user->getAndroid()->getWork()==NULL |$user->getAndroid()->getWork()==""){
                $response = $this->redirect( $this->generateUrl('nod_Corporate_new'));
                return $response;  
            }
            return $this->render('NodCorporateBundle::work.html.twig');
        }
        return $this->render('nod/index.html.twig');
    }
    
    public function newAction(Request $request)
    {   if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
        if($user->getAndroid()==NULL |$user->getAndroid()=="") {
        
        $em = $this->getDoctrine()->getManager();
        
        $work = new Work();
        $android->setHumanity(1);
        $android->setMoney("100");
        $android->setDescription("");
        

        $form = $this->createForm(newAndroidType::class,$android);    
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($android);
            $user->setAndroid($android);
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
            return $this->render('NodCoporateBundle::research.html.twig');
        }
        return $this->render('nod/index.html.twig');
    }
    
    
}
