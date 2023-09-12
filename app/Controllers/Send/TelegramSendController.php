<?php

namespace app\Controllers\Send;

use app\Interfaces\SendCodeInterface;

class TelegramSendController implements SendCodeInterface
{
    public function send(string $message) :array
    {
        // TODO отправка кода через телеграм API
        return [];
    }
}