<?php

namespace Mmarie\ContactBundle\Controller;

use Mmarie\ContactBundle\Entity\Message;
use Mmarie\ContactBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = new Message();

        $form = $this->createForm(new MessageType(), $message);

        return $this->render('MmarieContactBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    public function messageAction() {

        $message = new Message();
        $form = $this->createForm(new MessageType(), $message);

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->submit($request);

            if ($form->isValid()) {

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Message envoyé.'
                );

                $mail = \Swift_Message::newInstance()
                    ->setSubject('[MMARIE.FR] Nouveau message posté')
                    ->setFrom($this->container->getParameter('mailer_user'))
                    ->setTo('contact@mmarie.fr')
                    ->setBody($this->renderView('MmarieContactBundle:Default:email.html.twig', array('message' => $message)), 'text/html')
                ;
                $this->get('mailer')->send($mail);

                return $this->redirect($this->generateUrl('mmarie_contact_homepage'));
            }
            else {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'Impossible d\'envoyer le message.'
                );

                return $this->render('MmarieContactBundle:Default:index.html.twig', array('form' => $form->createView()));
            }
        }
    }
}
