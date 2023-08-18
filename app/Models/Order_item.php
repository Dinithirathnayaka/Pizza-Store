<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'qty',
        'total',
        'discount',
        'order_id',
        'product_id',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
