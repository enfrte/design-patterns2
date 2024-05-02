<?php 

namespace Strategy\Communication;

use Strategy\Message\MessageStrategy;

// Context class that will use the selected strategy
class MessageContext {
    private $messageStrategy;

    public function __construct(MessageStrategy $messageStrategy) {
        $this->messageStrategy = $messageStrategy;
    }

    public function sendMessage($to, $message) {
        $this->messageStrategy->send($to, $message);
    }
}
