<?php 
use App\Models\Product;
use App\Models\Category;
function getProducts(){
    return Product::latest()->get();
}
function getCategories(){
    return Category::orderBy('order_num' , 'ASC')->get();
}