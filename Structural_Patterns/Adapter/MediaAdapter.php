<?php

require_once 'MediaPlayer.php';
require_once 'AdvancedMediaPlayer.php';

class MediaAdapter implements MediaPlayer {
    private AdvancedMediaPlayer $advancedPlayer;

    public function __construct() {
        $this->advancedPlayer = new AdvancedMediaPlayer();
    }

    public function play(string $fileType, string $fileName): void
    {
        if ($fileType === "mp4") {
            $this->advancedPlayer->playMp4($fileName);
        } elseif ($fileType === "vlc") {
            $this->advancedPlayer->playVlc($fileName);
        } else {
            echo "Unsupported file type: $fileType\n";
        }
    }
}
