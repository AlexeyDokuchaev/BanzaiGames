<?php

class SmsNotificator implements NotificationSender
{
    public function send(Recipient $recipient, NotificationMessage $message)
    {
        $phone = $recipient->getContact(Recipient::CONTACT_TYPE_PHONE);
        $text = $message->getBody();
    }
}

