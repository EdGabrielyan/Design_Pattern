<?php

namespace AbstractFactoryPattern\LightTheme;

use AbstractFactoryPattern\Interfaces\Button;

class LightButton implements Button
{
    public function render(): string
    {
        return "Rendering Light Button";
    }
}
