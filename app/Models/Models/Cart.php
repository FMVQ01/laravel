<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'stock_id', 'user_id',
    ];
}   
