<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MarketingController extends Controller{
  public function getWoodFlooring(){
    return view('marketing.wood-flooring');
  }
  public function getEngineeredFloors(){
    return view('marketing.engineered-floors');
  }
  public function getTiles(){
    return view('marketing.tiles');
  }
}
