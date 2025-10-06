<?php
require __DIR__ . '/vendor/autoload.php';

$user = new App\Models\User("Иван");
echo $user->getName();
// ✅ "Иван"
$service = new App\Services\UserService();
echo $service->getUserGreeting("Олег");
// ✅ "Привет, Олег!"
$order = new App\Models\Order();
$order->log("Заказ создан");
// ✅ "[LOG]: Заказ создан"
