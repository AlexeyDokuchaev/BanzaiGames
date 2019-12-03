<?php


class Notificator
{
    protected $sender;

    public function __construct(NotificationSender $sender)
    {
        $this->sender = $sender;
    }

    public function send(Recipient $recipient, NotificationMessage $message)
    {
        $this->sender->send($recipient, $message);
    }
}