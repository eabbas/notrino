<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=
    [
        'title',
        'description',
        'parent_id',
        'image'
    ];
    public function parent()
    {
        return $this->belongsTo(category::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(category::class, 'parent_id');
    }
    public function grandChild()
    {
        return $this->children()->with("grandchild");
    }
    public function products()
    {
        return $this->belongsToMany(product::class, 'Product_categories' , 'category_id' , 'product_id');
    }
}
