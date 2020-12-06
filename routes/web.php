<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'PagesController@test');
Route::get('/home', 'PagesController@getHome')->name('home');
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('our-factory' , 'PagesController@getOurFactory')->name('factory');
Route::get('contact' , 'ContactController@getContact')->name('contact');
Route::get('products' , 'PagesController@getProductsPage')->name('products');
Route::prefix('events')->group(function(){
  Route::get('/' , 'EventsController@getUserHome')->name('events');
  Route::get('/{slug}' , 'EventsController@getSingle')->name('events.single');
});
Route::middleware('guest')->group(function(){
  Route::get('login' , 'AuthController@getLogin')->name('login');
  Route::post('login' , 'AuthController@postLogin')->name('login.post');
  Route::get('logout' , 'AuthController@Logout')->name('logout');
});
Route::group(['middleware' => 'auth','prefix' => 'admin'] , function(){
  Route::get('/' , 'AdminController@getIndex')->name('admin.home');
    Route::prefix('events')->group(function(){
      Route::get('/' , 'EventsController@getIndex')->name('admin.allEvents');
      Route::get('/new' , 'EventsController@getNew')->name('admin.getNewEvent');
      Route::post('/new' , 'EventsController@postNew')->name('admin.postNewEvent');
      Route::get('/edit/{id}' , 'EventsController@getEdit')->name('admin.getEditEvent');
      Route::post('/edit/{id}' , 'EventsController@postEdit')->name('admin.postEditEvent');
      Route::get('/delete/{id}' , 'EventsController@delete')->name('admin.deleteEvent');
    });
    Route::prefix('messages')->group(function(){
      Route::get('/all' , 'ContactController@getAll')->name('admin.allMessages');
    });
});
