<?php

namespace App\Enums;

enum SupportStatus: string  {
    case A = "Open";
    case C = "Closed";
    case P = "Pendent";

    public static function fromValue(string $status): string
    {
        foreach (self::cases() as $case) {
            if ($status === $case->name) {
                return $case->value;
            }
        }

        throw new \ValueError("$status is not valid");
    }
}