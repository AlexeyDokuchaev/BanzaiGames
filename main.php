<?php

$service = new NotificationService();
$users = [
    new UserAdapter(new User()),
    new UserAdapter(new User()),
];
$text = 'Какой-то тексе';

foreach ($users as $user) {
    $service->notify($user, $text);
}