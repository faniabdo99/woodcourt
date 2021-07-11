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
    public function getArabicLanding(){
        return view('arabic-landing');
    }
    public function getAboutUs(){
        return view('about-us');
    }
    public function getOurFactory(){
        return view('factory');
    }
    public function getProductsPage(){
        return view('products');
    }
    public function getPaymentMethodsPage(){
        return view('payment-methods');
    }
    public function getPolicyPage(){
        return view('policy');
    }
    public function getExpertHub(){
        $AllArticles = Event::where('type' , 'article')->where('is_important' , 1)->limit(5)->get();
        return view('expert-hub',compact('AllArticles'));
    }
    public function getVrTourPage(){
        return view('vr-tour');
    }
}
