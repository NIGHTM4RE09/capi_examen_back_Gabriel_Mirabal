<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;

    protected $table = "user_domicilio";
    protected $guarded = ['id'];
    protected $hidden   = [
        'created_at',
        'updated_at',
    ];
}
