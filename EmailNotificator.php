<?php

class EmailNotificator implements Notificator
{
    protected $recipient;
    protected $message;

    public function __construct(Recipient $recipient, NotificationMessage $message)
    {
        $this->recipient = $recipient;
        $this->message = $message;
    }

    public function send()
    {
        $email = $this->recipient->getContact(Recipient::CONTACT_TYPE_EMAIL);
        $text = $this->message->getBody();
    }
}