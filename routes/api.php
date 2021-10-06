<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('contact' , 'ContactController@postContact')->name('contact.post');
Route::post('admin/upload-event-image' , 'EventsController@uploadImage')->name('event.uploadImage');
Route::post('admin/upload-product-image' , 'ProductController@uploadImage')->name('product.uploadImage');
Route::post('/edit' , 'ReviewController@postEditReviews')->name('admin.reviews.postEdit');
