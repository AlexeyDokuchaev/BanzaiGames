<?php


interface NotificationSender
{
    public function send(Recipient $recipient, NotificationMessage $message);
}