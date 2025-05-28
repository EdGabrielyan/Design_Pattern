<?php

namespace Remotes;

use Devices\Device;

class Remote
{
    protected Device $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function turnOn(): void
    {
        $this->device->turnOn();
    }

    public function turnOff(): void
    {
        $this->device->turnOff();
    }
}
