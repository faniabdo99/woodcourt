<?php
use Illuminate\Support\Facades\Route;
Route::get('contact' , 'ContactController@getContact')->name('contact.get');
Route::get('/', function () {
    return view('index');
});
