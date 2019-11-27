<?php

class SmsNotificator
{
    public function sendSms(Recipient $recipient, $text)
    {
        $phone = $recipient->getPhone();
    }
}