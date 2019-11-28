<?php

class NotificationService
{
    public function notify(NotificationSender $notificator)
    {
        $notificator->send();
    }
}