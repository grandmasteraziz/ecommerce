<?php

namespace Patnos\SepetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends Controller
{
    public function indexAction( )
    {
        $a= "deneme";
        return $this->render('PatnosSepetBundle:Default:index.html.twig',array('arra3'=>$a));
    }
}
