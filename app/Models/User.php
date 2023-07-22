<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user',
        'level',
        'theme',
        'password',
        'user_create',
        'user_update',
        'user_update_time',
        'user_deleted'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'level' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function userCreated()
    {
        return User::find($this->user_create);
    }

    public function getLevelStringAttribute()
    {
        return match ($this->level) {
            2 => 'DESPACHADOR',
            3 => 'DESPACHADOR E ATENDENTE',
            4 => 'SUPERVISOR',
            5 => 'ADMINISTRADOR',
            6 => 'CHEFE OPERACIONAL',
            default => 'ATENDENTE',
        };
    }
}
