<?php

namespace SOLID\OCP\Abstracts;
use SOLID\OCP\Driver;

abstract class Vehicle
{
    private string $color;

    private Driver $driver;

    private array $route;

    public function setColor($color)
    {

        $this->color = $color;
    }

    public function getColor() :string
    {
        return $this->color;
    }

    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver() :Driver
    {
        return $this->driver;
    }

    public function addRoute($routes)
    {
        $this->route[] = $routes;
    }

    public function getRoute() :array
    {
        return $this->route;
    }
}