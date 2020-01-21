<?php

namespace App\backend;


use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
    	return $this->belongsTo(category::class);
    }
    public function brand()
    {
    	return $this->belongsTo(brand::class);
    }
    public function tag()
    {
    	return $this->belongsTo(tag::class);
    }

}
