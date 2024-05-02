<?php

namespace Strategy;

use Strategy\Communication\MessageContext;
use Strategy\Message\EmailMessage;
use Strategy\Message\SMSMessage;
use Strategy\Message\InternalMessage;


class Init
{
	public function __construct() {
		$emailContext = new MessageContext(new EmailMessage());
		// $smsContext = new MessageContext(new SMSMessage());
		// $internalContext = new MessageContext(new InternalMessage());

		// $emailContext->sendMessage("example@example.com", "Hello from email");
		// $smsContext->sendMessage("123456789", "Hello from SMS");
		// $internalContext->sendMessage("John Doe", "Hello from internal message");
	}
}

new Init();
