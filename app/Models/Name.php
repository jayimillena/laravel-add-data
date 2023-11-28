<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'fullname',
        'age',
        'address',
    ];

    use HasFactory;
}
