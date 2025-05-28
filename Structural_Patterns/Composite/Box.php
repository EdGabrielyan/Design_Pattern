<?php

require_once 'ProductComponent.php';

class Box implements ProductComponent
{
    private array $items = [];

    public function add(ProductComponent $item): void
    {
        $this->items[] = $item;
    }

    public function getPrice(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}
