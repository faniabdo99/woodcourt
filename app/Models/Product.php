<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Product extends Model{
    protected $guarded = [];
    use HasFactory;
    public function Category(){
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
}
