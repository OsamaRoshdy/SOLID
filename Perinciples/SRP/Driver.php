<?php


namespace SOLID\SRP;


class Driver
{
    private string $name;

    private int $age;

    private int $insuranceNumber;

    private string $address;

    public function __construct(string $name, int $age, int $insuranceNumber, string $address)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setInsuranceNumber($insuranceNumber);
        $this->setAddress($address);

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge() :int
    {
        return $this->age;
    }

    public function setInsuranceNumber($insuranceNumber)
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    public function getInsuranceNumber() :int
    {
        return $this->insuranceNumber;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function geAddress() :string
    {
        return $this->address;
    }
}