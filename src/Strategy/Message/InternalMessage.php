<?php

namespace Strategy\Message;

use Strategy\Message\MessageStrategy;

// Define the SMS message strategy
class SMSMessage implements MessageStrategy {
    public function send($to, $message) {
        // Code to send SMS message
        echo "Sending SMS to $to: $message\n";
    }
}
