<?php

class NotificationService
{
    public function notify(Recipient $recipient, $text)
    {
        $emailNotificator = new EmailNotificator();
        $smsNotificator = new SmsNotificator();

        $emailNotificator->sendEmail($recipient, $text);
        $smsNotificator->sendSms($recipient, $text);
    }
}