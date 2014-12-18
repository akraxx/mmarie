<?php

namespace Mmarie\TranslationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($route)
    {
        return $this->redirect($this->generateUrl($route, array('_locale' => $this->get('request')->getLocale())));
    }
}
