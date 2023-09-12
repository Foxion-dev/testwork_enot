<?php

namespace app\Controllers\Send;

use app\Interfaces\SendCodeInterface;

class SMSSendController implements SendCodeInterface
{
    public function send(string $message) :array
    {
        // TODO отправка кода через сервис SMS
        return [];
    }
}