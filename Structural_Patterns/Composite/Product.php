<?php

require_once 'ProductComponent.php';

class Product implements ProductComponent
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
