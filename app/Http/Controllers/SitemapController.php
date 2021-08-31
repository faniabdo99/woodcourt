<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Product;
class SitemapController extends Controller{
    public function getSitemap(){
      $AllEvents = Event::latest()->get();
      $AllProducts = Product::latest()->get();
      return response()->view('sitemap', compact('AllEvents' , 'AllProducts'))->header('Content-Type', 'text/xml');
    }
}
