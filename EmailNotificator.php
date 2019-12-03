<?php

class EmailNotificator implements NotificationSender
{
    public function send(Recipient $recipient, NotificationMessage $message)
    {
        $email = $recipient->getContact(Recipient::CONTACT_TYPE_EMAIL);
        $text = $message->getBody();
    }
}