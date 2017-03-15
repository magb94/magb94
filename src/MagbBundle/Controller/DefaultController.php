<?php

namespace MagbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MagbBundle:Default:index.html.twig');
    }
}
