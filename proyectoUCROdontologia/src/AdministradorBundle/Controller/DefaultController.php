<?php

namespace AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function inicioAction()
    {
        return $this->render('AdministradorBundle:Default:index.html.twig');
    }
}
