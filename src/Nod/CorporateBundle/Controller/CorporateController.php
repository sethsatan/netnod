<?php

namespace Nod\CorporateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nod\CorporateBundle\Entity\Corporate;
use Nod\CorporateBundle\Form\newCorporateType;

class CorporateController extends Controller
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
            return $this->redirect( $this->generateUrl('nod_Character_android'));
        }
        return $this->render('nod/index.html.twig');
    }
   
    public function newAction(Request $request)
    {   if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
        $user = $this->getUser();
        if($user==true) {
        
        $em = $this->getDoctrine()->getManager();
        
        $corporate = new Corporate();
        $corporate->setCapital("1");
        $corporate->setDescription("");
        

        $form = $this->createForm(newCorporateType::class,$corporate);    
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($corporate);
            $em->flush();
            
        return $this->redirect( $this->generateUrl('nod_Corporate_work'));
        }
        
        return $this->render('NodCorporateBundle::newCorporate.html.twig', array(
            'form' => $form->createView(),
        ));
        }}
        return $this->render('nod/index.html.twig');
        
    }
    
}
