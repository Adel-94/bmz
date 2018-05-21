<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product_category;


class Products extends Model
{
    protected $table = 'products';
	public function product_category()
	{
		return $this->belongsTo('App\Models\Product_category','prodCategory_id','id');
	}

}
