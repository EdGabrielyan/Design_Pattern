<?php

class HomeTheaterFacade {
    protected TV $tv;
    protected SoundSystem $sound;
    protected StreamingService $stream;

    public function __construct(TV $tv, SoundSystem $sound, StreamingService $stream) {
        $this->tv = $tv;
        $this->sound = $sound;
        $this->stream = $stream;
    }

    public function watchMovie($title): void
    {
        $this->tv->turnOn();
        $this->tv->setChannel("HDMI 1");

        $this->sound->turnOn();
        $this->sound->setVolume(20);

        $this->stream->startMovie($title);
    }
}
