<?php

namespace AbstractFactoryPattern\DarkTheme;

use AbstractFactoryPattern\Interfaces\Button;

class DarkButton implements Button
{
    public function render(): string
    {
        return "Rendering Dark Button";
    }
}
