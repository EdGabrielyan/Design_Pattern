<?php

use AbstractFactoryPattern\Interfaces\UIComponentFactory;

function renderUI(UIComponentFactory $factory): void
{
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    echo $button->render() . PHP_EOL;
    echo $checkbox->render() . PHP_EOL;
}
