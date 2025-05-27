<?php

require_once 'SportsCarBuilder.php';
require_once 'Director.php';

$builder = new SportsCarBuilder();
$director = new Director($builder);

$sportsCar = $director->buildSportsCar();
$sportsCar->show();  // Outputs: Car with V8 Engine, Alloy Wheels, and color Red
