<?php

require_once 'EmailNotifier.php';
require_once 'SmsNotifier.php';
require_once 'Notifier.php';

class NotifierFactory {
    public static function create(string $channel): Notifier {
        return match($channel) {
            'email' => new EmailNotifier(),
            'sms' => new SmsNotifier(),
            default => throw new Exception("Unsupported channel: $channel"),
        };
    }
}
