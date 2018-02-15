<?php

namespace AppBundle\Transport;


class VehicleManager
{
    protected $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function transport(): string
    {
        return $this->vehicle->transport();
    }
}