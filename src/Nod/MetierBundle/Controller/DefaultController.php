<?php

namespace MetierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MetierBundle:Default:index.html.twig');
    }
}
