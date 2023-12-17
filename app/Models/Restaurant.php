<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Authenticatable
{
    use HasFactory;
    protected $guard = "restaurant";


    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address'
    ];
}
