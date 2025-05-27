<?php

require_once 'CarBuilder.php';
require_once 'Car.php';

class SportsCarBuilder implements CarBuilder
{
    private Car $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function setEngine(string $type): CarBuilder
    {
        $this->car->engine = $type;
        return $this;
    }

    public function setWheels(string $type): CarBuilder
    {
        $this->car->wheels = $type;
        return $this;
    }

    public function setColor(string $color): CarBuilder
    {
        $this->car->color = $color;
        return $this;
    }

    public function build(): Car
    {
        return $this->car;
    }
}
