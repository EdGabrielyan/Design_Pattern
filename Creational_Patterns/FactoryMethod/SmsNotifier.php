<?php

require_once 'Notifier.php';

class SmsNotifier implements Notifier {
    public function send(string $message): void {
        echo "Sending SMS: $message\n";
    }
}