<?php

namespace Mmarie\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmarieHomeBundle:Default:index.html.twig');
    }
}
