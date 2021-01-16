<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use App\Models\LimitedEditionCategory;
class PagesController extends Controller{
    public function getSoonPage(){return view('soon');}
    public function getHome(){
      $LimitedEditionCategories = LimitedEditionCategory::latest()->get();
      return view('index' , compact('LimitedEditionCategories'));
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
}
