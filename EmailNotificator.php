<?php

class EmailNotificator
{
    public function sendEmail(Recipient $recipient, NotificationMessage $message)
    {
        $email = $recipient->getEmail();
        $text = $message->getBody();
    }
}