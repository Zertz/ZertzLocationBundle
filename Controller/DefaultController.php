<?php

namespace Zertz\LocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZertzLocationBundle:Default:index.html.twig', array('name' => $name));
    }
}
