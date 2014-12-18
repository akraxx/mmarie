<?php

namespace Mmarie\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmariePortfolioBundle:Default:index.html.twig');
    }
}
