<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class OtherController
{
    protected $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/other-origin", name="other-origin")
     */
    public function otherAction()
    {
        $content = $this->twig->render(
            'default/other.html.twig'
        );
        $response = new Response();
        $response->setContent($content);

        return $response;
    }
}