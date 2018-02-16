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
    public function indexAction(Request $request)
    {
        $translator = $this->get('translator');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'salut' => $translator->trans('salut'),
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/reverse", name="reverse")
     */
    public function reverseAction(Request $request)
    {
        $translator = $this->get('translator');
        $manager = $this->get('manager.default');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'salut' => $translator->trans($manager->reverseString('salut')),
        ]);
    }
}
