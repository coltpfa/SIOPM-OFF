<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cia extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "user_created",
        "user_updated"
    ];

    public function userCreate()
    {
        return $this->belongsTo(User::class);
    }
    public function user_updated()
    {
        return $this->belongsTo(User::class);
    }
}
