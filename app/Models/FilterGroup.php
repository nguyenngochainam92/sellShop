<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterGroup extends Model
{
    protected $table = 'filter_group';
    public function filter()
    {
    	return $this->hasMany('App\Models\Filter');
    }
}
