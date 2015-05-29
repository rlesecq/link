<?php

namespace LinkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LinkBundle:Default:index.html.twig', array('name' => $name));
    }
}
