<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'discount',
        'orderstatus',
        'address',
        'mobile_number',
        'cusname',
        'note'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Define the relationship: One user has many orders
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function rider()
    {
        return $this->belongsTo(Rider::class, 'rider_id');
    }
}
