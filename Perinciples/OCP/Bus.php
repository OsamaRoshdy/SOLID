<?php


namespace SOLID\OCP;

//use SOLID\OCP\Interfaces\IVehicle
use SOLID\OCP\Abstracts\Vehicle;
use SOLID\OCP\Interfaces\IVehicle;

class Bus extends Vehicle implements IVehicle
{

    private int $doors;

    private int $maxSpeed;

    private int $numberOfPassengers;


    public function setDoors(int $doors)
    {

        $this->doors = $doors;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setNumberOfPassengers(int $numberOfPassengers)
    {
        $this->numberOfPassengers = $numberOfPassengers;

    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }


    public function move(): string
    {
        return 'i\'m Car and i\'m moving in the road';
    }

}