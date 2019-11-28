<?php

class NotificationService
{
    public function notify(Notificator $notificator)
    {
        $notificator->send();
    }
}