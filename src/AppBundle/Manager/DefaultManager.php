<?php

namespace AppBundle\Manager;


use Doctrine\ORM\EntityManagerInterface;

class DefaultManager
{
    protected $em;

    protected $environment;

    public function __construct(EntityManagerInterface $manager, string $environment)
    {
        $this->em = $manager;
        $this->environment = $environment;
    }

    public function reverseString(string $source): string
    {
        if ($this->environment === 'dev') {
            return strrev($source);
        } else {
            return str_shuffle($source);
        }
    }
}