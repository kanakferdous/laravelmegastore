<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class adminUser extends Model
{
    protected $fillable = ['uname','fname','lname','email','password'];
}
