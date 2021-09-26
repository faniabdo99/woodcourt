<?php
use App\Models\Product;
use App\Models\Category;
function getProducts(){
    return Product::latest()->get();
}
function getCategories(){
    return Category::orderBy('order_num' , 'ASC')->get();
}
function getSubCategories(){
    $SubCategories = Category::where('type' , 'sub')->get();
    dd($SubCategories);
    if($SubCategories->slug !== 'bathroom-cabinets' && 'shower-units' && 'cladding'){
        return Category::where('type' , 'sub')->get();
    }
}
