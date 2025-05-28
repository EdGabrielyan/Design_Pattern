<?php

namespace Remotes;

class AdvancedRemote extends Remote
{
    public function mute(): void
    {
        echo "Device muted"."\n";
    }
}
