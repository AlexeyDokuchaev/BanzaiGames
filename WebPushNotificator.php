<?php


class WebPushNotificator implements NotificationSender
{

    public function send(Recipient $recipient, NotificationMessage $message)
    {
        $sid = $recipient->getContact(Recipient::CONTACT_TYPE_SESSION);
        $text = $message->getBody();
    }
}