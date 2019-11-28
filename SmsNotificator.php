<?php

class SmsNotificator implements Notificator
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
        $phone = $this->recipient->getContact(Recipient::CONTACT_TYPE_PHONE);
        $text = $this->message->getBody();
    }
}