<?php

class SmsNotificator extends Notificator implements NotificationSender
{
    public function send()
    {
        $phone = $this->recipient->getContact(Recipient::CONTACT_TYPE_PHONE);
        $text = $this->message->getBody();
    }
}

