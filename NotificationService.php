<?php

class NotificationService
{
    private $senders;

    /**
     * NotificationService constructor.
     * @param NotificationSender[] $senders
     */
    public function __construct(array $senders)
    {
        $this->senders = $senders;
    }

    public function notify($user, $text)
    {
        $message = new TextMessage($text);
        $recipient = new UserAdapter($user);

        foreach ($this->senders as $sender) {
            $notificator = new Notificator($sender);
            $notificator->send($recipient, $message);
        }
    }
}