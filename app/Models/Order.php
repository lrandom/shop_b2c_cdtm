<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sub_total',
        'tax',
        'total',
        'full_name',
        'address',
        'phone',
        'note',
        'status'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
