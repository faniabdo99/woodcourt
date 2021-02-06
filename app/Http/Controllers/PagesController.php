<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use App\Models\LimitedEditionCategory;
use App\Models\Event;
class PagesController extends Controller{
    public function getSoonPage(){return view('soon');}
    public function getHome(){
      $LimitedEditionCategories = LimitedEditionCategory::latest()->get();
      $LatestBlogs = Event::where('type' , 'article')->latest()->limit(3)->get();
      return view('index' , compact('LimitedEditionCategories','LatestBlogs'));
    }
    public function getAboutUs(){
        return view('about-us');
    }
    public function getOurFactory()
    {
        return view('factory');
    }
    public function getProductsPage()
    {
        return view('products');
    }
    public function getExpertHub()
    {
        return view('expert-hub');
    }
}
