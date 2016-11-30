<?php

namespace Nod\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NodCharacterBundle:Default:index.html.twig');
    }
}
