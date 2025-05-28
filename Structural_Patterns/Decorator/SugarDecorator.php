<?php

require_once 'CoffeeDecorator.php';

class SugarDecorator extends CoffeeDecorator {
    public function getCost(): float {
        return $this->coffee->getCost() + 0.3;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ', Sugar';
    }
}
