<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'quantity',
        'user_id',
        'product_id'
    ];
    public function products()
    {
        return $this->belongsTo(product::class,'product_id');
    }

}
