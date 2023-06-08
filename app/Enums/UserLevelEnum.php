<?php

namespace App\Enums;

enum UserLevelEnum: int
{
    case User = 1;
    case Desp = 2;
    case DespAtem = 3;
    case Supervisor = 4;
    case Admin = 5;
    case Manager = 6;

    case SuperAdministrator = 10;
    case Developer = 15;

    public static function getDescription($value): string
    {

        return match ($value) {
            self::User => 'ATENDENTE',
            self::Desp => 'DESPACHADOR',
            self::DespAtem => 'DESPACHADOR E ATENDENTE',
            self::Supervisor => 'SUPERVISOR',
            self::Admin => 'ADMINISTRADOR',
            self::Manager => 'CHEFE OPERACIONAL',
            self::SuperAdministrator => 'Super Administrador',
            default => 'Não definido',
        };
    }
}
