<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Category_Locale;
use Image as ImageLib;
use Validator;
class CategoryController extends Controller{
  public function getIndex(){
    $AllCategories = Category::latest()->get();
    return view('admin.category.index' , compact('AllCategories'));
  }
  public function getNew(){
    $AllCategories = Category::where('type' , 'main')->latest()->get();
    return view('admin.category.new' , compact('AllCategories'));
  }
  public function postNew(Request $r){
    //Validate the request
    $Rules = [
      'title' => 'required',
      'slug' => 'required|unique:categories',
      'description' => 'required',
      'category_id' => 'required',
      'image' => 'nullable|image'
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all())->withInput();
    }else{
      $CategoryData = $r->all();
      //Upload the image
      if($r->has('image')){
          $img = ImageLib::make($r->image);
          // backup status
          $img->backup();
          // Cover Low Res
          $img->fit(600, 600);
          $img->save('storage/app/categories/'.$r->slug.'.'.$r->image->getClientOriginalExtension());
          $CategoryData['image'] = $r->slug.'.'.$r->image->getClientOriginalExtension();
      }
      //Upload the data
      $CategoryData['slug'] = strtolower(str_replace(' ' , '-' , $r->slug));
      $CategoryData['type'] = 'sub';
      Category::create($CategoryData);
      //Return Success Message
      return redirect()->route('admin.category.all')->withSuccess('Category Created Successfully');
    }
  }
  public function getEdit($id){
    $Category = Category::findOrFail($id);
    $AllCategories = Category::where('type' , 'main')->latest()->get();
    if(!$Category){abort('404');}
    return view('admin.category.edit' , compact('Category' , 'AllCategories'));
  }
  public function postEdit(Request $r , $id){
    //Current Category Data
    $TheCategory = Category::find($id);
    if(!$TheCategory){abort('404');}
    //Validate the request
    $Rules = [
      'title' => 'required',
      'description' => 'required',
      'category_id' => 'required',
      'image' => 'nullable|image'
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all())->withInput();
    }else{
      $CategoryData = $r->all();
      //Upload the image
      if($r->has('image')){
        $img = ImageLib::make($r->image);
        // backup status
        $img->backup();
        // Cover Low Res
        $img->fit(600, 600);
        $img->save('storage/app/categories/'.$r->slug.'.'.$r->image->getClientOriginalExtension());
        $CategoryData['image'] = $r->slug.'.'.$r->image->getClientOriginalExtension();
      }
      $TheCategory->update($CategoryData);
      //Return Success Message
      return redirect()->route('admin.category.all')->withSuccess('Category Updated');
    }
  }
  public function getLocalize($id){
      $TheCategory = Category::findOrFail($id);
      return view('admin.category.localize' , compact('TheCategory'));
  }
  public function postLocalize(Request $r, $id){

    $Rules = [
        'title_value' => 'required',
        'description_value' => 'required',
    ];
    $Validator = Validator::make($r->all() , $Rules);
    if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
    }else{
        $LocalData = $r->all();
        $LocalData['category_id'] = $id;
        //Create or update category local
        $TheLocal = Category_Locale::where('category_id' , $id)->first();
        if($TheLocal){
            //Update
            $TheLocal->update($LocalData);
        }else{
            //Create
            Category_Locale::create($LocalData);
        }
    return redirect()->route('admin.category.all')->withSuccess('Translation Added');
}
  }
  public function delete($id){
    Category::findOrFail($id)->delete();
    return back()->withSuccess('Category Deleted');
  }
  public function uploadImage(Request $r){
     $imgpath = request()->file('file')->store('uploads', 'public');
     $FinalPath  = url("storage/app/public/")."/".$imgpath;
     return json_encode(['location' => $FinalPath]);
  }

  //Non-Admin Stuff
  public function getUserHome(){
      $AllCategorys = Category::latest()->paginate(10);
      return view('events' , compact('AllCategorys'));
  }
  public function getSingle($slug){
    $TheCategory = Category::where('slug' ,$slug)->first();
    $LatestCategorys = Category::latest()->where('slug' , '!=' , $slug)->limit(6)->get();
    if(!$TheCategory){abort(404);}
    views($TheCategory)->record();
    return view('single-event' , compact('TheCategory' , 'LatestCategorys'));
  }
}
