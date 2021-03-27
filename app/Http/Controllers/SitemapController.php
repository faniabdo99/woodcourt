<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
class SitemapController extends Controller{
    public function getSitemap(){
      $AllEvents = Event::latest()->get();
      return response()->view('sitemap', compact('AllEvents'))->header('Content-Type', 'text/xml');
    }
}
