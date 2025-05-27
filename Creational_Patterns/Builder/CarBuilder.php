<?php

interface CarBuilder
{
    public function setEngine(string $type): CarBuilder;
    public function setWheels(string $type): CarBuilder;
    public function setColor(string $color): CarBuilder;
    public function build(): Car;
}