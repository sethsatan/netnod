<?php

namespace Nod\PersonnageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NodPersonnageBundle:Default:index.html.twig');
    }
}
