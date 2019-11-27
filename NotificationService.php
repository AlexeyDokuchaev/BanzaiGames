<?php

class NotificationService
{
    public function notify(Recipient $recipient, NotificationMessage $message)
    {
        $emailNotificator = new EmailNotificator();
        $smsNotificator = new SmsNotificator();

        $emailNotificator->sendEmail($recipient, $message);
        $smsNotificator->sendSms($recipient, $message);
    }
}