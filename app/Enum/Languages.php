<?php

namespace App\Enum;

enum Languages: string
{
    case ENGLISH = 'en';
    case UKRAINE = 'ua';

    public static function all(): array
    {
        return [
            self::ENGLISH->value,
            self::UKRAINE->value,
        ];
    }
}
