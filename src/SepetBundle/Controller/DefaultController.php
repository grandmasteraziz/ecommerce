<?php

namespace SepetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SepetBundle:Default:index.html.twig');
    }
}
