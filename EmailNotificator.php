<?php

class EmailNotificator
{
    public function sendEmail(Recipient $recipient, $text)
    {
        $email = $recipient->getEmail();
    }
}