<?php

namespace Mmarie\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmarieCvBundle:Default:index.html.twig');
    }
}
