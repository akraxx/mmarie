<?php

namespace Mmarie\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmarieContactBundle:Default:index.html.twig');
    }
}
