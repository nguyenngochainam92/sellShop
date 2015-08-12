<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function stock()
    {
    	return $this->belongsTo('App\Models\Stock');
    }
    public function manufacturer()
    {
    	return $this->belongsTo('App\Models\Manufacturer');
    }
    public function condition()
    {
    	return $this->belongsTo('App\Models\Condition');
    }
    public function productImage()
    {
        return $this->hasMany('App\Models\ProductImage')
    }
}
