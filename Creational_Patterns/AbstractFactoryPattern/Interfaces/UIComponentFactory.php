<?php

namespace AbstractFactoryPattern\Interfaces;

use AbstractFactoryPattern\Interfaces\Button;
use AbstractFactoryPattern\Interfaces\Checkbox;

interface UIComponentFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
