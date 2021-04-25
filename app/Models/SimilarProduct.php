<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarProduct extends Model{
    protected $guarded = [];
    use HasFactory;
    public function Product(){
        return $this->belongsTo(Product::class , 'item_id');
    }
}
