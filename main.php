<?php
// Инициализация и конфигурация сервиса
$service = new NotificationService([
    new SmsNotificator(),
    new EmailNotificator(),
    new WebPushNotificator(),
]);

$users = [
    new User(),
    new User(),
];

//region клиентская часть
$text = 'Какой-то текст';
foreach ($users as $user) {
    $service->notify($user, $text);
}
//endregion