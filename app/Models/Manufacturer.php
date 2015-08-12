<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    //
    protected $table = 'manufacturer';

    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
