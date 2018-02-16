<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/invoke")
 */
class InvokedController
{
    public function __invoke(\Twig_Environment $twig)
    {
        $content = $twig->render(
            'default/invoke.html.twig'
        );
        $response = new Response();
        $response->setContent($content);

        return $response;
    }

    public function getCoucou(): string
    {
        return 'coucou';
    }
 }