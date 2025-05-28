<?php

require_once 'AudioPlayer.php';

$player = new AudioPlayer();
$player->play("mp3", "song1.mp3");
$player->play("mp4", "video1.mp4");
$player->play("vlc", "movie1.vlc");
$player->play("avi", "clip1.avi");
