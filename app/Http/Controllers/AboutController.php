<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\About;
use File;

class AboutController extends Controller
{
       public function index(){
    $about = About::all();
    return view('admin_view.layouts.abouts',compact('about'));
    }

    public function add_about(){
        return view ('admin_view.layouts.add_abouts');
    }
    public function save_about(Request $r){
	$this->validate($r,array(

	'about_text'=> 'required|min:20'
	));
  


    
    $about = new About();          
    $about ->about_text = $r->about_text;
   
	$about->save();  
    return  redirect()->route('about')->with('success','About created successfully!'); 
      
     
    }


    public function delete_about($id) {
        $about = About::findOrFail($id);
        $about->delete();
      
        return back()->with('success','About deleted successfully!');
    }

    public function edit_about($id){
        $about_id = About::find($id);
        return view('admin_view.layouts.edit_abouts',compact('about_id'));
    }

    public function update_about(Request $r,$id){
        $this->validate($r,array(
          
            'about_text' => 'required|min:20'
        ));
        $about_id = About::find($id);
        $about_id->about_text = $r->about_text;        
        $about_id->save();
        return  redirect()->route('about')->with('success','About updated successfully!');
    }
}
