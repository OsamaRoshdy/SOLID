<?php


namespace SOLID\OCP;



use SOLID\OCP\Interfaces\IVehicle;

class Trip implements IVehicle
{
    private string $tripNumber;

    private int $tripPrice;

    private int $duration;

    private IVehicle $vehicle;

    public function __construct(IVehicle $vehicle,string $tripNumber, int $tripPrice, $duration)
    {
        $this->tripNumber = $tripNumber;
        $this->tripPrice = $tripPrice;
        $this->duration = $duration;
        $this->vehicle = $vehicle;
    }

    public function move(): string
    {
        return 'i\'m Trip and i\'m moving in the road';
    }
}

/*
 *
 *
 *
 *
 *
 *
 *
 *
 */