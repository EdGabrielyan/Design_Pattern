<?php

require 'Devices/Device.php';
require 'Devices/TV.php';
require 'Devices/Radio.php';
require 'Remotes/Remote.php';
require 'Remotes/AdvancedRemote.php';

use Devices\TV;
use Devices\Radio;
use Remotes\Remote;
use Remotes\AdvancedRemote;

$tv = new TV();
$radio = new Radio();

$tvRemote = new Remote($tv);
$tvRemote->turnOn();
$tvRemote->turnOff();

$radioRemote = new AdvancedRemote($radio);
$radioRemote->turnOn();
$radioRemote->mute();
$radioRemote->turnOff();
