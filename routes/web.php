<?php
use Illuminate\Support\Facades\Route;
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('contact' , 'ContactController@getContact')->name('contact.get');
Route::get('/', function () {
    return view('index');
});
