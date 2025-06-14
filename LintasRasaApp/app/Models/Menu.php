<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

        protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'qris_image',
    ];

    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }
}
