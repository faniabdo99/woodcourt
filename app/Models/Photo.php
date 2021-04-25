<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Photo extends Model{
    use HasFactory;
    protected $guarded = [];
    public function Category(){
      return $this->belongsTo(Category::class , 'category_id');
    }
    public function getThumbPathAttribute(){
      return url('storage/app/products/small_thumb').'/'.$this->image;
    }
    public function getImagePathAttribute(){
      return url('storage/app/products/original').'/'.$this->image;
    }
}
