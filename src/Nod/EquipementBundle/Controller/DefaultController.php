<?php

namespace EquipementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EquipementBundle:Default:index.html.twig');
    }
}
