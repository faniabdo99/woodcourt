<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller{
  public function getSoonPage(){
    return view('soon');
  }
  public function getHome(){
    return view('index');
  }
  public function getAboutUs(){
    return view('about-us');
  }
  public function getProductsPage(){
    return view('products');
  }
}
