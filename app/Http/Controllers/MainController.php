<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Products;
use App\Models\Product_category;

class MainController extends Controller
{
	public function index()
	{   
		return view('user_view.index');
	}

	public function about()
	{   
		$about = About::orderBy('id','desc')->first();
		return view('user_view.about',compact('about'));
	}
	public function projects()
	{   
		
		return view('user_view.projects');
	}
	public function product()
	{   
		$allcategories = Product_category::all();
		$data = Products::orderBy('id','desc')->paginate(2);
		return view('user_view.products',compact('allcategories','data'));
	}
	public function order()
	{   
		return view('user_view.order');
	}
	public function contact()
	{   
		return view('user_view.contact');
	}
	public function sortbyCat(Product_category $cat)
	{  
		//dd($cat);
		$allcategories =  Product_category::all();
		$data = $cat->products()->paginate(2);
		return  view('user_view.products',compact('allcategories','data'));
	}

	public function productDetails($id)
	{   
		$allcategories =  Product_category::all();
		$product_id = Products::findOrFail($id);
		return view('user_view.productDetails',compact('product_id','allcategories'));
	}

			public function search(Request $request)
	{   
	    $searchData = $request->searchData;
	   	$allcategories = Product_category::all();
	    $data = Products::where('prod_name', 'like', '%' .$searchData. '%')->paginate(2);
		return view('user_view.products',compact('data','searchData','allcategories'));
	}
}
