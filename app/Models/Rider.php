<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id', 'name', 'mobile', 'imgurl'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'rider_id');
    }
}
