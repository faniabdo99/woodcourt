<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class Category extends Model{
    protected $guarded = [];
    use HasFactory;
    public function Parent(){
      if($this->type != 'main'){
        return $this->belongsTo(Category::class , 'category_id');
      }else{
        return [
          'title' => 'N/A'
        ];
      }
    }
    public function SubCategories(){
      return $this->hasMany(Category::class , 'category_id');
    }
    public function getShortDescriptionAttribute(){
      return Str::words($this->description , 10);
    }
    public function getThumbPathAttribute(){
      return url('storage/app/categories').'/'.$this->image;
    }
}
