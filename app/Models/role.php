<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable=['title','parent_id'];
    
    public function user(){
        return $this->belongsToMany(User::class,'role_users');
    }
}