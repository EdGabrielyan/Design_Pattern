<?php

require_once 'MediaPlayer.php';
require_once 'MediaAdapter.php';

class AudioPlayer implements MediaPlayer {
    private $adapter;

    public function play(string $fileType, string $fileName): void
    {
        if ($fileType === "mp3") {
            echo "Playing MP3 file: $fileName\n";
        } else {
            $this->adapter = new MediaAdapter();
            $this->adapter->play($fileType, $fileName);
        }
    }
}
