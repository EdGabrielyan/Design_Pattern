<?php

class Director
{
    private CarBuilder $builder;

    public function __construct(CarBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildSportsCar(): Car
    {
        return $this->builder
            ->setEngine("V8 Engine")
            ->setWheels("Alloy Wheels")
            ->setColor("Red")
            ->build();
    }
}
