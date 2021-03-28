<?php


namespace SOLID\SRP;


class Route
{
    private string $source;

    private string $destination;

    private string $distance;


    public function __construct(string $source, string $destination, string $distance)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->distance = $distance;
    }
}