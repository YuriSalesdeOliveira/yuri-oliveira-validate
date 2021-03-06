<?php

namespace YuriOliveira\Validation\Validations;

use YuriOliveira\Validation\Message\Message;

class Min extends AbstractValidation
{
    protected static function string(string $key, string $value, int $min)
    {
        if (strlen($value) < $min)
        {
            return Message::get(['min' => 'string'], attribute: $key, parameter: $min);
        }

        return true;
    }

    protected static function file(string $key, array $value, int $min)
    {
        if ($value['size'] < $min)
        {
            return Message::get(['min' => 'file'], attribute: $key, parameter: $min);
        }

        return true;
    }
}