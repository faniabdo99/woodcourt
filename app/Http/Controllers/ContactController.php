<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Validator;
use Mail;
class ContactController extends Controller{
    public function getContact(){
      return view('contact');
    }
    public function postContact(Request $r){
      //Validate the request
      $Rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10'
      ];
      $Validator = Validator::make($r->all(), $Rules);
      if($Validator->fails()){
        return response($Validator->errors()->first() , 400);
      }else{
        //Send the message
        Mail::to('info@thewoodcourt.com')->send(new ContactUsMail($r->all()));
        if( count(Mail::failures()) > 0 ) {
          return response('Something Went Wrong! Please Try Again' , 500);
        }else{
          return response('Message Sent!' , 200);
        }
      }
    }
}
