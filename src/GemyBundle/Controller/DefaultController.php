<?php

namespace GemyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GemyBundle:Default:index.html.twig');
    }
}
