<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpmm extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "user_created",
        "user_updated"
    ];
}
