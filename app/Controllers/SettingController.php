<?php

namespace app\Controllers;

class SettingController
{

    public function update($data)
    {
        $data = self::validate($data);

        // TODO обновление настроек
    }

    private static function validate($data)
    {
        // TODO валидация данных, в том числе проверка "подтверждения". Может быть обёрнута в ресурсы/сервисы

        return $data;
    }

}