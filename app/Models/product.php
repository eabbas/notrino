<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=
    [
        'title',
        'description',
        'summary',
        'show_home',
        'price',
        'discount'
    ];
    // public function categories()
    // {
    //     return $this->belongsToMany(category::class, 'product_categories');
    // }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
    public function medias()
    {
        return $this->hasMany(media::class);
    }
    public function attributes()
    {
        return $this->hasMany(attribute::class, 'product_id');
    }
}
