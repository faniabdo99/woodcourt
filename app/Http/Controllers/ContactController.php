<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Validator;
use Mail;
use Sheets;
use App\Models\Message;
class ContactController extends Controller{
    //Admin Methods
    public function getAll(){
      $AllMessages = Message::latest()->get();
      return view('admin.messages.index' , compact('AllMessages'));
    }
    //Non-Admin Methods
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
        //Upload to the database
        $TheMessage = Message::create($r->all());
        //Upload to the datasheet
        $TheMessageSheetData = $r->all();
        $TheMessageSheetData['form_location'] = 'Contact Us Page';
        Sheets::spreadsheet('1Q0_PmHIfx5VH4xP5uDUOime2fkHHAKWF1dshyyUmXFQ')->sheet('ContactUs')->append([$TheMessageSheetData]);
        return response('Message Sent!' , 200);
        //Send the message
        // Mail::to('info@thewoodcourt.com')->send(new ContactUsMail($r->all()));
        // if( count(Mail::failures()) > 0 ) {
        //   return response('Something Went Wrong! Please Try Again' , 500);
        // }else{
        // }
      }
    }
    public function postLimitedEdition(Request $r){
      //Validate the request
      $Rules = [
        'name' => 'required',
        'email' => 'required|email'
      ];
      $Validator = Validator::make($r->all(), $Rules);
      if($Validator->fails()){
        return redirect()->back()->with($Validator->errors()->first());
      }else{
        //Upload to the datasheet
        $TheMessageSheetData = $r->except('_token');
        Sheets::spreadsheet('1Q0_PmHIfx5VH4xP5uDUOime2fkHHAKWF1dshyyUmXFQ')->sheet('LimitedEditionRequests')->append([$TheMessageSheetData]);
        return redirect()->back()->withSuccess('Thank you for your request, We will contact you in 24 Hours');
      }
    }
    public function postQuote(Request $r){
      //Validate the request
      $Rules = [
        'name' => 'required',
        'contact_method' => 'required',
        'message' => 'required'
      ];
      $Validator = Validator::make($r->all(), $Rules);
      if($Validator->fails()){
        return redirect()->back()->withErrors($Validator->errors()->first());
      }else{
        //Upload to the datasheet
        $TheMessageSheetData = $r->except('_token');
        Sheets::spreadsheet('1Q0_PmHIfx5VH4xP5uDUOime2fkHHAKWF1dshyyUmXFQ')->sheet('GetQuote')->append([$TheMessageSheetData]);
        return redirect()->back()->withSuccess('Thank you for your request, We will contact you in 24 Hours');
      }
    }
}
