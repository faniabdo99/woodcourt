<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Locale;
use App\Models\ProductGallery;
use App\Models\Category;
use App\Models\Review;
use App\Models\SimilarProduct;
use Validator;
use DB;
use Image as ImageLib;
class ProductController extends Controller{
    public function getIndex(){
        $AllProducts = Product::latest()->get();
        return view('admin.product.index', compact('AllProducts'));
    }
    public function getTest(){
        $AllProducts = Product::latest()->paginate(100);
        return view('test', compact('AllProducts'));
    }
    public function deleteGalleryImagesTest($id){
        ProductGallery::findOrFail($id)->delete();
        dd('Deleted');
    }
    public function getRedirectProducts($slug){
        $Urls = Category::all()->pluck('slug')->toArray();
        if (in_array($slug, $Urls)) {
            return redirect()->route('products',['category' , $slug]);
        } else {
            abort(404);
        }
        $AllProducts = Product::latest()->get();
        return view('admin.product.index', compact('AllProducts'));
    }
    public function getNew(){
        $AllSubCategories = Category::where('type', 'sub')->latest()->get();
        $AllCategories = Category::where('type', '!=', 'sub')->latest()->get();
        $id = Product::latest()->limit(1)->first()->id;
        $NextProductId = $id + 1;
        return view('admin.product.new', compact('AllCategories', 'AllSubCategories', 'NextProductId'));
    }
    public function postNew(Request $r){
        //Validate the request
        $Rules = [
            'title' => 'required',
            // 'serial_number' => 'required',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all())->withInput();
        } else {
            $AllowedExt = ['png', 'jpeg', 'jpg', 'gif', 'bmb'];
            $ProductData = $r->except(['gallery', '_token']);
            //More Validation
            if ($r->has('gallery')) {
                if (count($r->gallery) > 50) {
                    return back()->withErrors('You can\'t upload more than 50 images!');
                }
                foreach ($r->gallery as $file) {
                    // Check the file type and size
                    if (!in_array($file->getClientOriginalExtension(), $AllowedExt)) {
                        return back()->withErrors('Some Files Are Not Allowed!')->withInput();
                    }
                    if ($file->getSize() > 5000000) {
                        return back()->withErrors('Maximum Allowed File Size is 5MB Per File!')->withInput();
                    }
                }
            }
            if ($r->has('image')) {
                $r->slug = strtolower(str_replace(' ', '-', $r->title));
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // Thumb
                $img->fit(300, 300);
                $img->save('storage/app/products/small_thumb/' . $r->slug . '.jpg');
                $img->reset();
                // Full Size
                $img->save('storage/app/products/original/' . $r->slug . '.jpg');
                $ProductData['image'] = $r->slug . '.jpg';
            }
            $ProductData['slug'] = $r->slug;
            //Upload to db
            $TheProduct = Product::create($ProductData);
            //Upload the images
            if ($r->has('gallery')) {
                foreach ($r->gallery as $key => $file) {
                    $img = ImageLib::make($file);
                    // backup status
                    $img->backup();
                    // Full Size
                    $img->save('storage/app/products_gallery/original/' . $r->slug . $key . '.' . $file->getClientOriginalExtension());
                    $img->reset();
                    // Thumbial
                    $img->fit(200, 200);
                    $img->save('storage/app/products_gallery/small_thumb/' . $r->slug . $key . '.' . $file->getClientOriginalExtension());
                    $img->reset();
                    $TheImage = $TheProduct->slug . $key . '.' . $file->getClientOriginalExtension();
                    ProductGallery::create([
                        'product_id' => $TheProduct->id,
                        'image' => $TheImage
                    ]);
                }
            }
            //Return to all projects page
            return redirect()->back()->withSuccess('Product Added!');
        }
    }
    public function getEdit($id){
        $AllSubCategories = Category::where('type', 'sub')->latest()->get();
        $AllCategories = Category::where('type', '!=', 'sub')->latest()->get();
        $Product = Product::findOrFail($id);
        if (!$Product) {
            abort('404');
        }
        return view('admin.product.edit', compact('Product', 'AllCategories', 'AllSubCategories'));
    }
    public function postEdit(Request $r, $id){
        //Validate the request
        $Rules = [
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all())->withInput();
        } else {
            $TheProduct = Product::find($id);
            $AllowedExt = ['png', 'jpeg', 'jpg', 'gif', 'bmb'];
            $ProductData = $r->except(['gallery', '_token']);
            //More Validation
            if ($r->has('gallery')) {
                if (count($r->gallery) > 50) {
                    return back()->withErrors('You can\'t upload more than 50 images!');
                }
                foreach ($r->gallery as $file) {
                    // Check the file type and size
                    if (!in_array($file->getClientOriginalExtension(), $AllowedExt)) {
                        return back()->withErrors('Some Files Are Not Allowed!')->withInput();
                    }
                    if ($file->getSize() > 5000000) {
                        return back()->withErrors('Maximum Allowed File Size is 5MB Per File!')->withInput();
                    }
                }
            }
            if ($r->has('image')) {
                $TheProduct->slug = strtolower(str_replace(' ', '-', $r->title));
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // Thumb
                $img->fit(300, 300);
                $img->save('storage/app/products/small_thumb/' . $TheProduct->slug . '.jpg');
                $img->reset();
                // Full Size
                $img->save('storage/app/products/original/' . $TheProduct->slug . '.jpg');
                $ProductData['image'] = $TheProduct->slug . '.jpg';
            }
            //Upload to db
            $TheProduct->update($ProductData);
            //Upload the images
            if ($r->has('gallery')) {
                //Delete current gallery images
                ProductGallery::where('product_id', $TheProduct->id)->get()->map(function ($item) {
                    $item->delete();
                });
                foreach ($r->gallery as $key => $file) {
                    $img = ImageLib::make($file);
                    // backup status
                    $img->backup();
                    // Full Size
                    $waterMarkUrl = public_path('images/watermark.png');
                    $WaterMark = ImageLib::make($waterMarkUrl)->resize(
                        ($img->width() - ($img->width() * 0.20)),
                        null,
                        function ($constraint) {
                            $constraint->aspectRatio();
                        }
                    );
                    $img->insert($WaterMark, 'center');
                    $img->save('storage/app/products_gallery/original/' . $TheProduct->slug . $key . '.' . $file->getClientOriginalExtension());
                    $img->reset();
                    // Thumbial
                    $img->fit(200, 200);
                    $img->save('storage/app/products_gallery/small_thumb/' . $TheProduct->slug . $key . '.' . $file->getClientOriginalExtension());
                    $img->reset();
                    $TheImage = $TheProduct->slug . $key . '.' . $file->getClientOriginalExtension();
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
    public function getLocalize($id){
        $TheProduct = Product::findOrFail($id);
        return view('admin.product.localize', compact('TheProduct'));
    }
    public function postLocalize(Request $r, $id){
        $Rules = [
            'title_value' => 'required',
            'description_value' => 'required',
            'type_value' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all())->withInput();
        } else {
            $LocalData = $r->all();
            $LocalData['product_id'] = $id;
            //Create or update category local
            $TheLocal = Product_Locale::where('product_id', $id)->first();
            if ($TheLocal) {
                $TheLocal->update($LocalData);
            } else {
                Product_Locale::create($LocalData);
            }
        }
        return redirect()->route('admin.product.all')->withSuccess('Translation Added');

    }
    public function delete($id){
        Product::findOrFail($id)->delete();
        return back()->withSuccess('Product Deleted');
    }
    public function deleteGalleryImages($id){
        ProductGallery::where('product_id', $id)->get()->map(function ($item) {
            $item->delete();
        });
        return back()->withSuccess('Product Gallery Images Deleted');
    }
    public function uploadImage(Request $r){
        $img = ImageLib::make($r->image);
        // backup status
        $img->backup();
        // Full Size
        $img->save('storage/app/products_gallery/original/' . $r->product_id . date('YmdHis') . '.' . $r->image->getClientOriginalExtension());
        $img->reset();
        // Thumbial
        $img->fit(200, 200);
        $img->save('storage/app/products_gallery/small_thumb/' . $r->product_id . date('YmdHis') . '.' . $r->image->getClientOriginalExtension());
        $img->reset();
        $TheImage = $r->product_id . date('YmdHis') . '.' . $r->image->getClientOriginalExtension();
        ProductGallery::create([
            'product_id' => $r->product_id,
            'image' => $TheImage
        ]);
    }
    //Cross Sell
    public function getCrossSell($id){
        $Product = Product::findOrFail($id);
        $AllProducts = Product::where('id', '!=', $id)->latest()->get();
        return view('admin.product.cross-sell', compact('Product', 'AllProducts'));
    }
    public function postCrossSell(Request $r, $id){
        $Rules = [
            'item_id' => 'required'
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            if (count($r->item_id) > 0) {
                //Delete Old Records
                SimilarProduct::where('product_id', $id)->get()->map(function ($item) {
                    $item->delete();
                });
                foreach ($r->item_id as $item) {
                    SimilarProduct::create([
                        'product_id' => $id,
                        'item_id' => $item
                    ]);
                }
            }
            return back()->withSuccess('List Created');
        }
    }
    //Non-Admin Stuff
    public function getUserHome($isFiltered = null, $Filter = null){
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
    public function getSingle($slug){
        $TheProduct = Product::where('slug', $slug)->first();
        $LatestProducts = Product::latest()->where('slug', '!=', $slug)->limit(6)->get();
        if (!$TheProduct) {
            abort(404);
        }
        $Next = Product::where('id', '>', $TheProduct->id)->orderBy('id')->first();
        $Previous = Product::where('id', '<', $TheProduct->id)->orderBy('id', 'desc')->first();
        $Reviews = Review::where('active', 1)->get();
        return view('products.single', compact('TheProduct', 'LatestProducts', 'Previous', 'Next' , 'Reviews'));
    }
   
}
