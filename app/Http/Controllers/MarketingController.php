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
  public function getStairs(){
    return view('marketing.stairs');
  }
  public function getHdfFloors(){
    return view('marketing.hdf-floors');
  }
  public function getCabinets(){
    return view('marketing.cabinets');
  }
  public function getKitchens(){
    return view('marketing.kitchens');
  }
  public function getDressings(){
    return view('marketing.dressing');
  }
  public function getSinkUnits(){
    return view('marketing.sink-units');
  }
  public function getOutdoor(){
    return view('marketing.outdoor');
  }
  public function getTeakFlooring(){
    return view('marketing.teak-flooring');
  }
  public function getShowerUnits(){
    return view('marketing.shower-units');
  }
  public function getPergolas(){
    return view('marketing.pergolas');
  }
}
