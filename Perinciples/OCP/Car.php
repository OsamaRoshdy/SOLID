<?php

namespace SOLID\OCP;
use SOLID\OCP\Abstracts\Vehicle;
use SOLID\OCP\Interfaces\IVehicle;

class Car extends Vehicle implements IVehicle
{

    public function move(): string
    {
        return 'i\'m Car and i\'m moving in the road';
    }
}