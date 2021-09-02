<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Product extends Model{
    protected $guarded = [];
    use HasFactory;
    public function Category(){
      return $this->belongsTo(Category::class , 'main_category_id');
    }
    public function SubCategory(){
      return $this->belongsTo(Category::class , 'category_id');
    }
    public function Gallery(){
      return $this->hasMany(ProductGallery::class , 'product_id');
    }
    public function SimilarProducts(){
      return $this->hasMany(SimilarProduct::class,'product_id');
    }
    public function getShortDescriptionAttribute(){
      return Str::limit($this->description , 40);
    }
    public function getThumbPathAttribute(){
      return url('storage/app/products/small_thumb').'/'.$this->image;
    }
    public function getImagePathAttribute(){
      return url('storage/app/products/original').'/'.$this->image;
    }
    public function Locale(){
        return $this->hasOne(Product_Locale::class , 'product_id');
    }
    public function getLocalTitleAttribute(){
        if(session()->get('locale') == 'ar'){
            $Locale = Product_Locale::where('product_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->title_value;
            }else{
                return $this->title;
            }
        }
        else{
            return $this->title;
        }
    }
    public function getLocalDescritionAttribute(){
        if(session()->get('locale') == 'ar'){
            $Locale = Product_Locale::where('product_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->description_value;
            }else{
                return $this->description;
            }
        }
        else{
            return $this->description;
        }
    }
    public function getLocalTypeAttribute(){
        if(session()->get('locale') == 'ar'){
            $Locale = Product_Locale::where('product_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->type_value;
            }else{
                return $this->wood_type;
            }
        }
        else{
            return $this->wood_type;
        }
    }
}
