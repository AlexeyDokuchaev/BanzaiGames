<?php

$service = new NotificationService();
$users = [
    new User(),
    new User(),
];
$message = new TextMessage('Какой-то тексе');

foreach ($users as $user) {
    $service->notify(new SmsNotificator(new UserAdapter($user), $message));
    $service->notify(new EmailNotificator(new UserAdapter($user), $message));
}