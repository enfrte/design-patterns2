<?php 

namespace Strategy\Message;

interface MessageStrategy
{
	public function send($to, $message);
}
