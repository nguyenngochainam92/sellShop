<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filter';
    //
    public function filtergroup()
    {
    	return $this->belongsTo('App\Models\FilterGroup');
    }
}
