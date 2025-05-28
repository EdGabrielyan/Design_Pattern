<?php

require_once 'Coffee.php';

class SimpleCoffee implements Coffee {
    public function getCost(): float {
        return 2.0;
    }

    public function getDescription(): string {
        return 'Simple Coffee';
    }
}
