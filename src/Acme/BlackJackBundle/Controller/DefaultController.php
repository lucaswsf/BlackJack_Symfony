<?php

namespace Acme\BlackJackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeBlackJackBundle:Default:index.html.twig', array('name' => $name));
    }
}
