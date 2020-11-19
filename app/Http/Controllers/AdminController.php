<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Message;
class AdminController extends Controller{
    public function getIndex(){
      $EventsCount = Event::count();
      $MessagesCount = Message::count();
      return view('admin.index' , compact('EventsCount' , 'MessagesCount'));
    }
}
