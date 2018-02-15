<?php

namespace AppBundle\Transport;


class Bike implements VehicleInterface
{
    public function transport(): string
    {
        return "I'm a bike";
    }
}