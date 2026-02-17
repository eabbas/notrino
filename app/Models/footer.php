<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $fillable=
    [
        'column_id',
        'column_title',
        'key',
        'value'
    ];
}
