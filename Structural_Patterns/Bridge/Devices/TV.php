<?php

namespace Devices;

class TV implements Device
{
    public function turnOn(): void
    {
        echo "TV is turned ON"."\n";
    }

    public function turnOff(): void
    {
        echo "TV is turned OFF"."\n";
    }
}
