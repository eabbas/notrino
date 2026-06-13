<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $fillable = 
    [
        'title',
        'image',
        'link'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
