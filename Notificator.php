<?php


abstract class Notificator
{
    protected $recipient;
    protected $message;

    public function __construct(Recipient $recipient, NotificationMessage $message)
    {
        $this->recipient = $recipient;
        $this->message = $message;
    }
}