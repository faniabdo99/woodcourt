<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
class AdminController extends Controller{
    public function getIndex(){
      $EventsCount = Event::count();
      return view('admin.index' , compact('EventsCount'));
    }
}
