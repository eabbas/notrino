<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_purchases extends Model
{
    protected $fillable = [
        'user_id',
        'product_id'
    ];
}
