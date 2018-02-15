<?php

namespace AppBundle\Manager;


use Doctrine\ORM\EntityManagerInterface;

class DefaultManager
{
    protected $em;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->em = $manager;
    }

    public function reverseString(string $source): string
    {
        return strrev($source);
    }
}