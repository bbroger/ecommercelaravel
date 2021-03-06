<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

	public function products()
	{
		return $this->hasMany('App\Product');
	}
}