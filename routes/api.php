<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('contact' , 'ContactController@postContact')->name('contact.post');
