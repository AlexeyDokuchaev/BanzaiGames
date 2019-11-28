<?php

class EmailNotificator extends Notificator implements NotificationSender
{
    public function send()
    {
        $email = $this->recipient->getContact(Recipient::CONTACT_TYPE_EMAIL);
        $text = $this->message->getBody();
    }
}