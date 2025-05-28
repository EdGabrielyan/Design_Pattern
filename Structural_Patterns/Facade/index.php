<?php

require_once 'TV.php';
require_once 'SoundSystem.php';
require_once 'StreamingService.php';
require_once 'HomeTheaterFacade.php';

$facade = new HomeTheaterFacade(new TV(), new SoundSystem(), new StreamingService());
$facade->watchMovie("Inception");
