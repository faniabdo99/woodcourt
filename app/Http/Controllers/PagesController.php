<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
class PagesController extends Controller{
    public function getSoonPage(){return view('soon');}
    public function getHome(){return view('index');}
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
