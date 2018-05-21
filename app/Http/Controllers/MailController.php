<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use File;
use App\Mailfile;
use Image;
class MailController extends Controller
{
  	  public function postMessage(Request $r){
      $r->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required'
      ]);
     $data = [
        'user_name' => $r->name,
        'user_email' => $r->email,
        'user_phone' => $r->phone,
        'user_message' => $r->message
      ];

      Mail::send('mail.mail',$data,function($message) use ($data){
        $message->from('bakumz.1900@gmail.com','Balaxanı Maşınqayırma Zavodu');
        $message->to($data['user_email']);
      });
      Mail::send('mail.contactMessage',$data,function($message) use ($data){
        $message->from($data['user_email'],'user');
        $message->to('bakumz.1900@gmail.com');
      });
       return redirect()->back()->with('success','Your message has been sent successfully!'); 
    }
       

      public function sendOrder(Request $r){

      $r->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
        'o_file' => 'required|mimes:png,jpeg,jpg'
      ]);

      // $file = $r->file('image');
      //  $destination = public_path() . '/upload/mail_upload/';
      // $name= "image";
      // $extension = $file->getClientOriginalExtension();
      // $filename = $name . '.' . $extension;
      // $file->move($destination, $filename);
      $data = [
        'user_name' => $r->name,
        'user_email' => $r->email,
        'user_phone' => $r->phone,
        'user_message' => $r->message,
        'o_file' => $r->o_file
      ];


      Mail::send('mail.mail',$data,function($message) use ($data){
        $message->from('bakumz.1900@gmail.com','Balaxanı Maşınqayırma Zavodu');
        $message->to($data['user_email']);
    
      });
      Mail::send('mail.orderMessage',$data,function($message) use ($data){
        $message->from($data['user_email'],'user');
        $message->to('bakumz.1900@gmail.com');
        $message->attach($data['o_file']->getRealPath(),array(
        'as' => 'o_file.' . $data['o_file']->getClientOriginalExtension(),
        'mime' =>  $data['o_file']->getMimeType()
        ));
      });
       return redirect()->back()->with('success','Your order has been sent successfully!'); 
    }
}


