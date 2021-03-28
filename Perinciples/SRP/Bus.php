<?php


namespace SOLID\SRP;


class Bus
{
    private string $color;

    private int $doors;

    private int $maxSpeed;

    private int $numberOfPassengers;

    private Driver $driver;

    private Route $route;


    public function __construct(string $color, int $doors, int $maxSpeed, int $numberOfPassengers, Driver $driver, Route $route)
    {
        $this->setColor($color);
        $this->setDoors($doors);
        $this->setMaxSpeed($maxSpeed);
        $this->setNumberOfPassengers($numberOfPassengers);
        $this->setDriver($driver);
        $this->setRoute($route);

    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor() :string
    {
        return $this->color;
    }

    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    public function getDoors() :int
    {
        return $this->doors;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed() :int
    {
        return $this->maxSpeed;
    }

    public function setNumberOfPassengers($numberOfPassengers)
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    public function getNumberOfPassengers() :int
    {
        return $this->numberOfPassengers;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }


    public function getDriver() :Driver
    {
        return $this->driver;
    }

    public function setRoute($route)
    {
        $this->route = $route;
    }

    public function getRoute() :Route
    {
        return $this->route;
    }
}