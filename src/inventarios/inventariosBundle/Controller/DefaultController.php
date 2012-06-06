<?php

namespace inventarios\inventariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('inventariosBundle:Default:index.html.twig');
    }
}
