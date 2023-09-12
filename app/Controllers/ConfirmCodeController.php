<?php

namespace app\Controllers;

use app\Controllers\Send\MailSendController;
use app\Controllers\Send\SMSSendController;
use app\Controllers\Send\TelegramSendController;

class ConfirmCodeController
{
    private $code;

    public function request($method)
    {
        $this->code = self::generateCode();

        // TODO можно так же вернуть response/json/xml/массив и тд, в зависимости от требований фронтенда
        return $this->send($method);
    }

    public function check($inputCode)
    {
        // TODO можно так же вернуть response/json/xml/массив и тд, в зависимости от требований фронтенда
        return $this->code === $inputCode;
    }

    public function changeMethod($method)
    {
        // TODO можно так же вернуть response/json/xml/массив и тд, в зависимости от требований фронтенда
        return $this->send($method);
    }

    private static function generateCode()
    {
        return rand(10000,99999);
    }

    private function send(string $method) :bool
    {
        // TODO можно добавить ещё метод чтоб обернуть в сообщение по типу "Ваш номер подтверждения: *****"
        return match ($method){
            'telegram' => (new TelegramSendController())->send($this->code),
            'sms' => (new SMSSendController())->send($this->code),
            'email' => (new MailSendController())->send($this->code),
            default => false
        };
    }

}