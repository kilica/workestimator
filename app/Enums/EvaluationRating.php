<?php

namespace App\Enums;

enum EvaluationRating: int
{
    case KEEP_GOING = 1;
    case AS_EXPECTED = 2;
    case EXCEEDS_EXPECTATIONS = 3;

    public function label(): string
    {
        return match($this) {
            self::KEEP_GOING => '頑張れ！',
            self::AS_EXPECTED => '期待通り！',
            self::EXCEEDS_EXPECTATIONS => '期待以上！',
        };
    }

    public static function fromValue(int $value): self
    {
        return match($value) {
            1 => self::KEEP_GOING,
            2 => self::AS_EXPECTED,
            3 => self::EXCEEDS_EXPECTATIONS,
        };
    }

    public static function options(): array
    {
        return [
            self::KEEP_GOING->value => self::KEEP_GOING->label(),
            self::AS_EXPECTED->value => self::AS_EXPECTED->label(),
            self::EXCEEDS_EXPECTATIONS->value => self::EXCEEDS_EXPECTATIONS->label(),
        ];
    }
}
