<?php

namespace Mmarie\SkillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmarieSkillsBundle:Default:index.html.twig');
    }
}
