<?php


class WebPushNotificator extends Notificator implements NotificationSender
{

    public function send()
    {
        $sid = $this->recipient->getContact(Recipient::CONTACT_TYPE_SESSION);
        $text = $this->message->getBody();
    }
}