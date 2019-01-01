<?php

namespace Clemon\Transport;

interface TransportInterface
{
  public function send($subject, $message, $recipientParam);
}