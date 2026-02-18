<?php

namespace App\Enums;

enum CentralRolesEnum: string
{
    case SUPERADMIN = "Super admin";
    case ADMIN = "Admin";

    public function label(): string
    {
        return match ($this) {
            static::SUPERADMIN => 'Super admin',
            static::ADMIN => 'Admin',
        };
    }
}
