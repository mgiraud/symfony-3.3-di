<?php

namespace AppBundle\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class BindCoucouSubscriber implements EventSubscriberInterface
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        $content = $response->getContent();
        $pos = strripos($content, '</body>');

        if (false !== $pos) {
            $tagCode = "\n" . str_replace("\n", '', 'COUCOU') . "\n";
            $content = substr($content, 0, $pos) . $tagCode . substr($content, $pos);
            $response->setContent($content);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse'
        ];
    }
}