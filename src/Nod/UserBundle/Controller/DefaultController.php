<?php

namespace Nod\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NodUserBundle:Default:index.html.twig');
    }
}
