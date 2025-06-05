<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'items',
        'order_data',
        'total',
        'payment_proof',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
