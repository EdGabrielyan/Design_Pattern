<?php

namespace AbstractFactoryPattern\DarkTheme;

use AbstractFactoryPattern\Interfaces\UIComponentFactory;
use AbstractFactoryPattern\Interfaces\Button;
use AbstractFactoryPattern\Interfaces\Checkbox;

class DarkThemeFactory implements UIComponentFactory
{
    public function createButton(): Button
    {
        return new DarkButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new DarkCheckbox();
    }
}
