<?php

namespace App\Enums;

enum InterestLevel: int
{
    case SLIGHT = 1;
    case MODERATE = 2;
    case HIGH = 3;

    public function label(): string
    {
        return match($this) {
            self::SLIGHT => 'ちょい関心あり',
            self::MODERATE => '関心あり。力入れて！',
            self::HIGH => '最大の関心事です！',
        };
    }

    public static function fromValue(int $value): self
    {
        return match($value) {
            1 => self::SLIGHT,
            2 => self::MODERATE,
            3 => self::HIGH,
        };
    }

    public static function options(): array
    {
        return [
            self::SLIGHT->value => self::SLIGHT->label(),
            self::MODERATE->value => self::MODERATE->label(),
            self::HIGH->value => self::HIGH->label(),
        ];
    }
}
