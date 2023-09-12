<?php

namespace app\Interfaces;

interface SendCodeInterface
{
    public function send(string $message) :array;
}