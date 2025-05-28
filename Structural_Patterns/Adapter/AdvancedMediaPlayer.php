<?php

class AdvancedMediaPlayer {
    public function playMp4(string $fileName): void
    {
        echo "Playing MP4 file: $fileName\n";
    }

    public function playVlc(string $fileName): void
    {
        echo "Playing VLC file: $fileName\n";
    }
}
