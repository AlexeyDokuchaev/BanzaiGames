<?php

class SmsNotificator
{
    public function sendSms(Recipient $recipient, NotificationMessage $message)
    {
        $phone = $recipient->getContact(Recipient::CONTACT_TYPE_PHONE);
        $text = $message->getBody();
    }
}