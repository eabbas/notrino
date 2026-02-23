<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contactUs_comments extends Model
{
    protected $fillable = 
    [
        'name',
        'family',
        'email',
        'phoneNumber',
        'comment',
        'user_id'
    ];
}
