<?php

namespace Nod\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NodCoreBundle:Default:index.html.twig');
    }
    public function accessAction()
    {
        return $this->render('NodCoreBundle:Default:access.html.twig');
    }
}
