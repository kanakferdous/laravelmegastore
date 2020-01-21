<?php

namespace App\backend;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function parent()
    {
    	return $this->belongsTo(category::class, 'parent_id');
    }
    public function products()
    {
    	return $this->hasMany(product::class);
    }
}
