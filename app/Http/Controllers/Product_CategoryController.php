<?php
namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Models\Product_category;

	class Product_CategoryController extends Controller
	{
		public function index(){

			$categories = Product_category::all();
			return view('admin_view.layouts.prodCat',compact('categories'));
		}

		public function save_prodCat(Request $request){

			Product_category::insert([
				'prod_categoryName' => $request->prod_categoryName,

			]);
			return  redirect()->route('prodCat')->with('success','Categories created successfully!');
		}
		public function add_prodCat(){

			return view ('admin_view.layouts.add_prodCat');
		}
		public function delete_prodCat($id)
		{
			$categories = Product_category::findOrFail($id);
			$categories->delete();
			return back()->with('success','Categories deleted successfully!');
		}
		public function edit_prodCat($id){
			$category_id = Product_category::find($id);
			return view ('admin_view.layouts.edit_prodCat',compact('category_id'));
		}
		public function update_prodCat(Request $r,$id){
			$category_id = Product_category::find($id);
			$category_id->prod_categoryName = $r->prod_categoryName;
			$category_id->save();
			return  redirect()->route('prodCat')->with('success','Categories updated successfully!');
		}
	}
