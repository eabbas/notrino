<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_comments extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'text',
        'flag'
    ];
}
