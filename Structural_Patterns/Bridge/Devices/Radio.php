<?php

namespace Devices;

class Radio implements Device
{
    public function turnOn(): void
    {
        echo "Radio is playing"."\n";
    }

    public function turnOff(): void
    {
        echo "Radio is OFF"."\n";
    }
}
