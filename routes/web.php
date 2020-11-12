<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('contact' , 'ContactController@getContact')->name('contact');
Route::get('products' , 'PagesController@getProductsPage')->name('products');
Route::prefix('events')->group(function(){
  Route::get('/' , 'EventsController@getUserHome')->name('events');
  Route::get('/{slug}' , 'EventsController@getSingle')->name('events.single');
});

Route::prefix('admin')->group(function(){
  Route::get('/' , 'AdminController@getIndex')->name('admin.home');
    Route::prefix('events')->group(function(){
      Route::get('/' , 'EventsController@getIndex')->name('admin.allEvents');
      Route::get('/new' , 'EventsController@getNew')->name('admin.getNewEvent');
      Route::post('/new' , 'EventsController@postNew')->name('admin.postNewEvent');
      Route::get('/edit/{id}' , 'EventsController@getEdit')->name('admin.getEditEvent');
      Route::post('/edit/{id}' , 'EventsController@postEdit')->name('admin.postEditEvent');
      Route::get('/delete/{id}' , 'EventsController@delete')->name('admin.deleteEvent');
    });
});
