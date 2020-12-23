<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Message;
use App\Models\Category;
use App\Models\Product;
use App\Models\Photo;
class AdminController extends Controller{
    public function getIndex(){
      $EventsCount = Event::count();
      $MessagesCount = Message::count();
      $CategoriesCount = Category::count();
      $ProductsCount = Product::count();
      $PhotosCount = Photo::count();
      return view('admin.index' , compact('EventsCount' , 'MessagesCount' , 'CategoriesCount' , 'ProductsCount' , 'PhotosCount'));
    }
}
