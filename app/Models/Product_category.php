<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Product_category extends Model
{
	protected $table = 'product_category';
	public function products()
	{
		return $this->hasMany('App\Models\Products','prodCategory_id','id');
	}
	public function getRouteKeyname()
	{
		return 'prod_categoryName';
	}
}
