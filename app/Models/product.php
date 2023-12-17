<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class product extends Model
{
    use HasFactory;


    protected $fillable=['name','price','duration','details','restaurant_id','image'];

    public function cart()
    {
        return $this->hasMany(cart::class);
    }
//    protected $hidden = [
//        'price'
//    ];
}
