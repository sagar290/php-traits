<?php

namespace Sagar290\PhpTraits\Traits;

use UnitEnum;

trait EnumTraits
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::values(), self::names());
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function equal($value, UnitEnum|string $enum): bool
    {
        if (is_string($value)) {
            return $value === $enum->value;
        }

        return $value === $enum;
    }

    public static function notEqual($value, UnitEnum|string $enum): bool
    {
        return !self::equal($value, $enum);
    }

    public static function search($value): bool|int|string
    {
        return array_search($value, self::values());
    }

    public static function isValid(UnitEnum|string $value): bool
    {
        return in_array($value, self::values()) || in_array($value, self::cases());
    }

}