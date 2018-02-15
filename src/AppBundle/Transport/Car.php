<?php

namespace AppBundle\Transport;


class Car implements VehicleInterface
{
    public function transport(): string
    {
        return "I'm a car";
    }
}