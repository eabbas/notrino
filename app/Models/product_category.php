<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $fillable = 
    [
        'product_id',
        'category_id'
    ];
}
