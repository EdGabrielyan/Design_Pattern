<?php

class TV {
    public function turnOn(): void
    {
        echo "TV is now ON"."\n";
    }

    public function setChannel($channel): void
    {
        echo "TV set to channel: $channel"."\n";
    }
}
