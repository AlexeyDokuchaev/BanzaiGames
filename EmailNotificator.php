<?php

class EmailNotificator
{
    public function sendEmail(Recipient $recipient, NotificationMessage $message)
    {
        $email = $recipient->getContact(Recipient::CONTACT_TYPE_EMAIL);
        $text = $message->getBody();
    }
}