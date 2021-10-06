<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;
use App\Models\LimitedEditionCategory;
use App\Models\Event;
use App\Models\Category;
use App\Models\Product;
use App;
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
    public function getTestExpertHub(){
        $AllArticles = Event::where('type' , 'article')->where('is_important' , 1)->limit(5)->get();
        return view('test-expert-hub',compact('AllArticles'));
    }
    public function getVrTourPage(){
        return view('vr-tour');
    }
    public function getEngineeredWoodPage($isFiltered = null, $Filter = null){
    $TheCategory = Category::where('slug' , 'pergolas')->first();
    if (!$Filter) {
        $AllProducts = Product::latest()->get();
        $PageTitle = 'All Products';
        $Description = 'All Products available to view in the wood court showroom and factory';
    } else {
        if ($isFiltered == 'category') {
            $TheCategory = Category::where('slug', $Filter)->first();
            if ($TheCategory->type == 'sub') {
                $AllProducts = Product::where('category_id', $TheCategory->id)->latest()->get();
            } else {
                $SubCategoriesArray = Category::where('category_id', $TheCategory->id)->pluck('id')->toArray();
                $AllProducts = Product::whereIn('category_id', $SubCategoriesArray)->latest()->get();
            }
            $PageTitle = $TheCategory->LocalTitle;
            $Description = 'All Products in Category: '.$TheCategory->LocalTitle;
        }
        if ($isFiltered == 'wood-type') {
            $AllProducts = Product::where('wood_type', $Filter)->latest()->get();
            $PageTitle = $Filter;
            $Description = 'All Products Made with Wood: '.$Filter;
        }
    }
    $AllCategories = Category::where('type', 'main')->latest()->get();
    $AllWoodTypes = Product::pluck('wood_type')->unique();
    return view('products.index', compact('AllProducts', 'AllCategories', 'AllWoodTypes' , 'PageTitle', 'Description'));
    }
    //lang Func
    public function getSwitchLang($locale){
        if (! in_array($locale, ['en', 'ar'])) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
