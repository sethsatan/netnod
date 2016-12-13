<?php

namespace Nod\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function IsLoggerAction(Request $request)
    {
        $Username=$this->getUser();
        return $this->renderIsLogger(array(
        'username' => $Username));
    }
    
    protected function renderIsLogger(array $data)
    {
        return $this->render('NodUserBundle::IsLogger.html.twig', $data);
    }
    
}
