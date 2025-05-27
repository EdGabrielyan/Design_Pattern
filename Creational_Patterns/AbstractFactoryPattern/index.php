<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/renderUI.php';

use AbstractFactoryPattern\LightTheme\LightThemeFactory;
use AbstractFactoryPattern\DarkTheme\DarkThemeFactory;


$theme = 'dark';

$factory = match ($theme) {
    'light' => new LightThemeFactory(),
    'dark'  => new DarkThemeFactory(),
    default => throw new Exception("Unsupported theme"),
};

renderUI($factory);
