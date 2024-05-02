<?php

namespace Strategy\Message;

use Strategy\Message\MessageStrategy;

// Define the email message strategy
class EmailMessage implements MessageStrategy {
    public function send($to, $message) {
        // Code to send email message
        echo "Sending email to $to: $message\n";
    }
}