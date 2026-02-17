<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    protected $fillable = 
    [
        'key',
        'value',
        'product_id'
    ];
}
