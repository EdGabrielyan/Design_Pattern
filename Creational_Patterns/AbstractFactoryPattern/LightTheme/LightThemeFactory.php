<?php

namespace AbstractFactoryPattern\LightTheme;

use AbstractFactoryPattern\Interfaces\UIComponentFactory;
use AbstractFactoryPattern\Interfaces\Button;
use AbstractFactoryPattern\Interfaces\Checkbox;

class LightThemeFactory implements UIComponentFactory
{
    public function createButton(): Button
    {
        return new LightButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new LightCheckbox();
    }
}
