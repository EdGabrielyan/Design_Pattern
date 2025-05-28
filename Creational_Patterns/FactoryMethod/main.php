<?php

require_once 'NotifierFactory.php';

$notifier = NotifierFactory::create('sms');
$notifier->send("Factory Pattern Example!");
