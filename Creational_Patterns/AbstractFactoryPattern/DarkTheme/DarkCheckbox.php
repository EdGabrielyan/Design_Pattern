<?php

namespace AbstractFactoryPattern\DarkTheme;

use AbstractFactoryPattern\Interfaces\Checkbox;

class DarkCheckbox implements Checkbox
{
    public function render(): string
    {
        return "Rendering Dark Checkbox";
    }
}
