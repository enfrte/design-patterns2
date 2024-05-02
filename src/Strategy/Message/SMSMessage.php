<?php

namespace Strategy\Message;

use Strategy\Message\MessageStrategy;

// Define the internal message strategy
class InternalMessage implements MessageStrategy {
    public function send($to, $message) {
        // Code to send internal message
        echo "Sending internal message to $to: $message\n";
    }
}