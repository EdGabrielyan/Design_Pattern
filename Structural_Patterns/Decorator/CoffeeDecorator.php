<?php

require_once 'Coffee.php';

abstract class CoffeeDecorator implements Coffee {
    protected Coffee $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    abstract public function getCost(): float;
    abstract public function getDescription(): string;
}
