<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use App\Models\Product_category;

class ProductsController extends Controller
{
    	public function index(){
		$products = Products::all();
		return view('admin_view.layouts.products',compact('products'));
	}
		public function add_products(){
		$categories = Product_category::all();
		return view ('admin_view.layouts.add_products',compact('categories'));
	}
		public function edit_products($id){
		$product_id = Products::find($id);
		$categories = Product_category::all();
		return view ('admin_view.layouts.edit_products',compact('product_id','categories'));
	}
		public function delete_products($id)
	{
		$product_id = Products::findOrFail($id);
		$product_id->delete();
		File::delete(public_path() . '/assets/upload/product_upload/' . $product_id->prod_picture);
		return back()->with('success','Products deleted successfully!');
	}
		public function save_products(Request $r){
		$this->validate($r,array(
			'prod_picture'=> 'required|mimes:png,jpeg',
			'prod_name'=>'required',
			'prod_details'=>'required'
		));
		$products = new Products(); 
		$products->prod_details = $r->prod_details;
		$products->prod_name = $r->prod_name;
		$products->prod_description = $r->description;
		$products->prodCategory_id = $r->prod_categoryName;   
		if($r->hasFile('prod_picture')) {
			$prod_picture = str_random(8).'.'.$r->file('prod_picture')->getClientOriginalExtension();
			$r->file('prod_picture')->move(public_path('/assets/upload/product_upload'), $prod_picture);
			$products ->prod_picture = $prod_picture;
		}
		$products->save(); 
		return  redirect()->route('products')->with('success','Products created successfully!');
	}


	public function update_products(Request $r,$id){
		$this->validate($r,array(
			'prod_picture'=> 'mimes:png,jpeg',
		
		));
		$product_id = Products::find($id);
		$product_id->prod_details = $r->prod_details;
		$product_id->prod_name = $r->prod_name;
		$product_id->prodCategory_id = $r->prod_categoryName;
			$product_id->prod_description = $r->description;
		if($r->hasFile('prod_picture')){
			$photoname = str_random(8).'.'.$r->file('prod_picture')->getClientOriginalExtension();
			$r->file('prod_picture')->move(public_path('/assets/upload/product_upload'), $photoname);
			$oldphotoname=$product_id->prod_picture;
			$product_id->prod_picture=$photoname;
			File::delete(public_path() . '/assets/upload/product_upload/' . $oldphotoname);

		}
		$product_id->save();
		return  redirect()->route('products')->with('success','Products updated successfully!');
	}
}
