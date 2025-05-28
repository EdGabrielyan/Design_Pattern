<?php

require_once 'SimpleCoffee.php';
require_once 'MilkDecorator.php';
require_once 'SugarDecorator.php';

$coffee = new SimpleCoffee();
echo $coffee->getDescription() . " = $" . $coffee->getCost() . "\n";

// Add milk
$coffeeWithMilk = new MilkDecorator($coffee);
echo $coffeeWithMilk->getDescription() . " = $" . $coffeeWithMilk->getCost() . "\n";

// Add sugar
$coffeeWithMilkAndSugar = new SugarDecorator($coffeeWithMilk);
echo $coffeeWithMilkAndSugar->getDescription() . " = $" . $coffeeWithMilkAndSugar->getCost() . "\n";
