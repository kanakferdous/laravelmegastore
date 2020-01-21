<?php

namespace App\backend;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function parent()
    {
    	return $this->belongsTo(brand::class, 'parent_id');
    }
    public function products()
    {
    	return $this->hasMany(brand::class);
    }
}
