<?php

require_once 'Notifier.php';

class EmailNotifier implements Notifier {
    public function send(string $message): void {
        echo "Sending Email: $message\n";
    }
}