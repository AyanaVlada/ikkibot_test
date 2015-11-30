<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '136600287:AAHKwiYcqp4k1FkeYAJzxx-6hp8zVjfTOy4';
$BOT_NAME = 'ikkibot';

try {
    $telegram = new Longman\TelegramBot\Telegram($API_KEY,$BOT_NAME);

    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // echo $e->getMessage();
}
