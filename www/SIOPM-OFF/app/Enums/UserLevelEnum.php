<?php

namespace App\Enums;

enum UserLevelEnum: int
{
    case User = 1;
    case Desp = 2;
    case Supervisor = 4;

    case Admin = 5;

    case Stq =3;
    case Manager = 6;

    case SuperAdministrator = 10;
    case Developer = 15;

    public static function getDescription($value): string
    {

        return match ($value) {
            self::User => 'ATENDENTE',
            self::Desp => 'DESPACHADOR',
            self::Supervisor => 'SUPERVISOR',
            self::Admin => 'ADMINISTRADOR',
            self::Stq => 'STQ',
            self::Manager => 'CHEFE OPERACIONAL',
            self::SuperAdministrator => 'COMANDO COPOM',
            default => 'Não definido',
        };
    }
}
