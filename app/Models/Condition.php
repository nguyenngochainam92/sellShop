<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
