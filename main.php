<?php

class User
{
    public $email;
    public $phone;
}

class NotificationService
{
    public function notify(User $user, $text)
    {
        $emailNotificator = new EmailNotificator();
        $smsNotificator = new SmsNotificator();

        $emailNotificator->sendEmail($user->email, $text);
        $smsNotificator->sendSms($user->phone, $text);
    }
}

class EmailNotificator
{
    public function sendEmail($email, $text)
    {
        //DO NOTHING
    }
}

class SmsNotificator
{
    public function sendSms($phone, $text)
    {
        //DO NOTHING
    }
}

$service = new NotificationService();
$users = [
    new User(),
    new User(),
];
$text = 'Какой-то тексе';

foreach ($users as $user) {
    $service->notify($user, $text);
}