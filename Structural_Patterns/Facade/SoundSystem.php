<?php

class SoundSystem {
    public function turnOn(): void
    {
        echo "Sound system is now ON"."\n";
    }

    public function setVolume($level): void
    {
        echo "Volume set to: $level"."\n";
    }
}
