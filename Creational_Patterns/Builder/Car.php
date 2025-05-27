<?php

class Car
{
    public string $engine;
    public string $wheels;
    public string $color;

    public function show(): void
    {
        echo "Car with {$this->engine}, {$this->wheels}, and color {$this->color}\n";
    }
}