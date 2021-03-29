<?php


namespace SOLID\OCP;


class Driver
{
    private string $name;

    private int $age;

    private int $insuranceNumber;

    private string $address;

    public function __construct(string $name, int $age, int $insuranceNumber, string $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->insuranceNumber = $insuranceNumber;
        $this->address = $address;

    }


}