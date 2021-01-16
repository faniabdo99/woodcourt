<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model{
    protected $guarded = [];
    use HasFactory;

    public function getThumbPathAttribute(){
      return url('storage/app/products_gallery/small_thumb').'/'.$this->image;
    }
    public function getImagePathAttribute(){
      return url('storage/app/products_gallery/original').'/'.$this->image;
    }
}
