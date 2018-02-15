<?php

namespace AppBundle\Transport;


interface VehicleInterface
{
    public function transport(): string;
}