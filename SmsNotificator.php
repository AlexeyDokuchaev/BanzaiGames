<?php

class SmsNotificator
{
    public function sendSms(Recipient $recipient, NotificationMessage $message)
    {
        $phone = $recipient->getPhone();
        $text = $message->getBody();
    }
}