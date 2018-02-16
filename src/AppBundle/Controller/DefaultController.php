<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, InvokedController $controller)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'coucou' => $controller->getCoucou()
        ]);
    }

    /**
     * @Route("/other", name="other")
     */
    public function otherAction(Request $request, OtherController $controller)
    {
        // replace this example code with whatever you need
        return $controller->otherAction();
    }
}
