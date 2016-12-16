<?php

namespace Nod\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nod\CharacterBundle\Entity\Android;
use Nod\CharacterBundle\Form\newAndroidType;

class AndroidController extends Controller
{
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $android = new Android();
        $android->setHumanity(1);
        $android->setMoney("100");
        
        

        $form = $this->createForm(newAndroidType::class,$android);
            
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $android->setName($form->get($name));
            $em->persist($android);
            $em->flush();
            
        return $this->redirectToRoute('android_success');
        }
        
        return $this->render('NodCharacterBundle::newAndroid.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    
            
}
