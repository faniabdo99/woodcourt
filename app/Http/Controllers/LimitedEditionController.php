<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Image as ImageLib;
use App\Models\LimitedEditionCategory;
class LimitedEditionController extends Controller{
  public function getIndex(){
    $AllProducts = LimitedEditionCategory::latest()->get();
    return view('admin.product.index' , compact('AllProducts'));
  }
  public function getNew(){
    return view('admin.limited.new');
  }
  public function postNew(Request $r){
    //Validate the request
    $Rules = [
      'title' => 'required',
      'description' => 'required',
      'image' => 'required|image'
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all())->withInput();
    }else{
      $LCategoryData = $r->except(['gallery' , '_token']);
      if($r->has('image')){
        $img = ImageLib::make($r->image);
        // backup status
        $img->backup();
        // Thumb
        $img->fit(600, 600);
        $img->save('storage/app/limited/'.strtolower(str_replace(' ' , '_' , $r->title)).'.'.$r->image->getClientOriginalExtension());
      }
      //Upload to db
      $TheLCategory = LimitedEditionCategory::create($LCategoryData);
      //Return to all projects page
      return redirect()->route('admin.product.all')->withSuccess('Category Added!');
    }
  }
  public function getEdit($id){
    $TheLCategory = LimitedEditionCategory::findOrFail($id);
    if(!$TheLCategory){abort('404');}
    return view('admin.limited.edit' , compact('$TheLCategory'));
  }
  public function postEdit(Request $r , $id){
    //Validate the request
    $Rules = [
      'title' => 'required',
      'serial_number' => 'required',
      'category_id' => 'required',
      'description' => 'required',
      'image' => 'image'
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all())->withInput();
    }else{
      $TheProduct = LimitedEditionCategory::find($id);
      $AllowedExt = ['png','jpeg','jpg','gif','bmb'];
      $ProductData = $r->except(['gallery' , '_token']);
      //More Validation
      if($r->has('gallery')){
        //Delete Old Gallery Records
        $CurrentGallery =  ProductGallery::where('product_id' , $id)->get();
        $CurrentGallery->map(function($item){
          $item->delete();
        });
        if(count($r->gallery) > 5){
          return back()->withErrors('You can\'t upload more than 5 images!');
        }
        foreach ($r->gallery as $file) {
          // Check the file type and size
          if(!in_array($file->getClientOriginalExtension() , $AllowedExt)){
            return back()->withErrors('Some Files Are Not Allowed!')->withInput();
          }
          if($file->getSize() > 5000000){
            return back()->withErrors('Maximum Allowed File Size is 5MB Per File!')->withInput();
          }
        }
      }

      if($r->has('image')){
        $img = ImageLib::make($r->image);
        // backup status
        $img->backup();
        // Thumb
        $img->fit(400, 400);
        $img->save('storage/app/products/small_thumb/'.$r->slug.'.'.$r->image->getClientOriginalExtension());
        $img->reset();
        // Full Size
        $waterMarkUrl = public_path('images/watermark.png');
        $WaterMark = ImageLib::make($waterMarkUrl)->resize(
          ($img->width() - ($img->width() * 0.20))  , null,  function ($constraint) {
          $constraint->aspectRatio();
        });
        $img->insert($WaterMark, 'center');
        $img->save('storage/app/products/original/'.$r->slug.'.'.$r->image->getClientOriginalExtension());
        $ProductData['image'] = $r->slug.'.'.$r->image->getClientOriginalExtension();
      }
      //Upload to db
      $TheProduct->update($ProductData);
      //Upload the images
      if($r->has('gallery')){
        foreach ($r->gallery as $key => $file) {
          $img = ImageLib::make($file);
          // backup status
          $img->backup();
          // Full Size
          $waterMarkUrl = public_path('images/watermark.png');
          $WaterMark = ImageLib::make($waterMarkUrl)->resize(
            ($img->width() - ($img->width() * 0.20))  , null,  function ($constraint) {
            $constraint->aspectRatio();
          });
          $img->insert($WaterMark, 'center');
          $img->save('storage/app/products_gallery/original/'.$TheProduct->slug.$key.'.'.$file->getClientOriginalExtension());
          $img->reset();
          // Thumbial
          $img->fit(200, 200);
          $img->save('storage/app/products_gallery/small_thumb/'.$TheProduct->slug.$key.'.'.$file->getClientOriginalExtension());
          $img->reset();
          $TheImage = $TheProduct->slug.$key.'.'.$file->getClientOriginalExtension();
          ProductGallery::create([
            'product_id' => $TheProduct->id,
            'image' => $TheImage
          ]);
        }
      }
      //Return to all projects page
      return redirect()->route('admin.product.all')->withSuccess('Product Updated!');
    }
  }
  public function delete($id){
    LimitedEditionCategory::findOrFail($id)->delete();
    return back()->withSuccess('Product Deleted');
  }
  public function uploadImage(Request $r){
     $imgpath = request()->file('file')->store('uploads', 'public');
     $FinalPath  = url("storage/app/public/")."/".$imgpath;
     return json_encode(['location' => $FinalPath]);
  }

  //Non-Admin Stuff
  public function getUserHome($isFiltered = null , $Filter = null){
      if(!$Filter){
        $AllProducts = LimitedEditionCategory::latest()->paginate(50);
      }else{
        $TheCategory = Category::where('slug' , $Filter)->first();
        if($TheCategory->type == 'sub'){
          $AllProducts = LimitedEditionCategory::where('category_id' , $TheCategory->id)->latest()->paginate(50);
        }else{
          $SubCategoriesArray = Category::where('category_id' , $TheCategory->id)->pluck('id')->toArray();
          $AllProducts = LimitedEditionCategory::whereIn('category_id' , $SubCategoriesArray)->latest()->paginate(50);
        }
      }
      $AllCategories = Category::where('type' , 'main')->latest()->get();
      return view('products.index' , compact('AllProducts','AllCategories'));
  }
  public function getSingle($slug){
    $TheProduct = LimitedEditionCategory::where('slug' ,$slug)->first();
    $LatestProducts = LimitedEditionCategory::latest()->where('slug' , '!=' , $slug)->limit(6)->get();
    if(!$TheProduct){abort(404);}
    return view('products.single' , compact('TheProduct' , 'LatestProducts'));
  }
}
