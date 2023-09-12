<?php

namespace app\Controllers\Send;

use app\Interfaces\SendCodeInterface;

class MailSendController implements SendCodeInterface
{
    public function send(string $message) :array
    {
        // TODO отправка кода через mail() или сервис отправки писем
        return [];
    }
}