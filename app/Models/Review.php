<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model{
    use HasFactory;
    protected $guarded = [];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function getSamllImageAttribute(){
        return url('storage/app/products/small_thumb').'/'.$this->image;
    }
    public function getRateTextAttribute(){
        $RatesArray = [
            1 => __('products.products_single_rating_bad'),
            2 => __('products.products_single_rating_normal'),
            3 => __('products.products_single_rating_medium'),
            4 => __('products.products_single_rating_good'),
            5 => __('products.products_single_rating_very_good'),
        ];
        return $RatesArray[$this->rate];
    }
}
