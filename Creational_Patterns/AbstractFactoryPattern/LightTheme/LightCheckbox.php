<?php

namespace AbstractFactoryPattern\LightTheme;

use AbstractFactoryPattern\Interfaces\Checkbox;

class LightCheckbox implements Checkbox
{
    public function render(): string
    {
        return "Rendering Light Checkbox";
    }
}
