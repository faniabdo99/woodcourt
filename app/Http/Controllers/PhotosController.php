<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;
use Validator;
use Image as ImageLib;
class PhotosController extends Controller{
  public function getIndex(){
    $AllPhotos = Photo::latest()->get();
    return view('admin.photos.index' , compact('AllPhotos'));
  }
  public function getNew(){
    $AllCategories = Category::where('type' , 'sub')->latest()->get();
    return view('admin.photos.new' , compact('AllCategories'));
  }
  public function postNew(Request $r){
    //Validate the request
    $Rules = [
      'category_id' => 'required',
      // 'image' => 'required|image'
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all())->withInput();
    }else{
      $PhotoData = $r->except('_token');
      foreach ($r->image as $key => $imageSrc) {
        $img = ImageLib::make($imageSrc);
        // backup status
        $img->backup();
        // Thumb
        $img->fit(150, 150);
        $img->save('storage/app/products/small_thumb/'.($key+5).'.jpg');
        $img->reset();
 
      }
      // $img = ImageLib::make($r->image);
      // // backup status
      // $img->backup();
      // // Thumb
      // $img->fit(150, 150);
      // $img->save('storage/app/products/small_thumb/'.$r->image->getClientOriginalName());
      // $img->reset();
      // // Full Size
      // $waterMarkUrl = public_path('images/watermark.png');
      // $WaterMark = ImageLib::make($waterMarkUrl)->resize(
      //   ($img->width() - ($img->width() * 0.20))  , null,  function ($constraint) {
      //   $constraint->aspectRatio();
      // });
      // $img->insert($WaterMark, 'center');
      // $img->save('storage/app/products/original/'.$r->image->getClientOriginalName());
      // $PhotoData['image'] = $r->image->getClientOriginalName();
      //Upload to db
      // $ThePhoto = Photo::create($PhotoData);
      return redirect()->route('admin.photos.all')->withSuccess('Photo Added!');
    }
  }
  public function delete($id){
    Photo::findOrFail($id)->delete();
    return back()->withSuccess('Photo Deleted');
  }
  //Non-Admin Stuff
  public function getUserHome($isFiltered = null , $Filter = null){
      if(!$Filter){
        $AllPhotos = Photo::latest()->paginate(50);
      }else{
        $TheCategory = Category::where('slug' , $Filter)->first();
        if($TheCategory->type == 'sub'){
          $AllPhotos = Photo::where('category_id' , $TheCategory->id)->latest()->paginate(50);
        }else{
          $SubCategoriesArray = Category::where('category_id' , $TheCategory->id)->pluck('id')->toArray();
          $AllPhotos = Photo::whereIn('category_id' , $SubCategoriesArray)->latest()->paginate(50);
        }
      }
      $AllCategories = Category::where('type' , 'main')->latest()->get();
      return view('products.index' , compact('AllPhotos','AllCategories'));
  }
}
