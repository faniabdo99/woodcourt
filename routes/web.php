<?php
use Illuminate\Support\Facades\Route;
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('/', function () {
    return view('index');
});
