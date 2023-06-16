<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode\Classes;

/*
 * Чисто для обработки на фронте.
 * Для справки: структура должна быть такой:
 [
    'type' => 'success',
    'show' => true,
    'message' => 'Loaded',
    'messages'  => [
        [
            'type'  => 'warning',
            'translate_code' => 'Армия тьмы на подходе!'
        ]
    ]
 ]
 */

class AdditionalData
{
    public static function response(string $type = 'info', bool $show = false, array $messages = null, string $message = 'Loaded'): array
    {
        return [
            'type'     => $type,
            'show'     => $show,
            'message'  => $message,
            'messages' => $messages,
        ];
    }
}
