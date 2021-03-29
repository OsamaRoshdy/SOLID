<?php


namespace SOLID\OCP;


use Vehicle;

class Plane extends Vehicle implements \IVehicle
{

    public function move(): string
    {
        return 'i\'m Plane and i\'m moving in the road';
    }
}