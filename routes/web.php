<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'PagesController@getSoonPage');
Route::get('/home', 'PagesController@getHome')->name('home');
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('our-factory' , 'PagesController@getOurFactory')->name('factory');
Route::get('contact' , 'ContactController@getContact')->name('contact');
Route::post('contact-limited-edition' , 'ContactController@postLimitedEdition')->name('contactLimitedEdition');
Route::prefix('products')->group(function(){
  Route::get('/{slug}' , 'PhotosController@getSingle')->name('products.single');
  Route::get('/{isFiltered?}/{filter?}' , 'PhotosController@getUserHome')->name('products');
});
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
    Route::prefix('categories')->group(function(){
      Route::get('/' , 'CategoryController@getIndex')->name('admin.category.all');
      Route::get('/new' , 'CategoryController@getNew')->name('admin.category.getNew');
      Route::post('/new' , 'CategoryController@postNew')->name('admin.category.postNew');
      Route::get('/edit/{id}' , 'CategoryController@getEdit')->name('admin.category.getEdit');
      Route::post('/edit/{id}' , 'CategoryController@postEdit')->name('admin.category.postEdit');
      Route::get('/delete/{id}' , 'CategoryController@delete')->name('admin.category.delete');
    });
    Route::prefix('products')->group(function(){
      Route::get('/' , 'ProductController@getIndex')->name('admin.product.all');
      Route::get('/new' , 'ProductController@getNew')->name('admin.product.getNew');
      Route::post('/new' , 'ProductController@postNew')->name('admin.product.postNew');
      Route::get('/edit/{id}' , 'ProductController@getEdit')->name('admin.product.getEdit');
      Route::post('/edit/{id}' , 'ProductController@postEdit')->name('admin.product.postEdit');
      Route::get('/delete/{id}' , 'ProductController@delete')->name('admin.product.delete');
    });
    Route::prefix('photos')->group(function(){
      Route::get('/' , 'PhotosController@getIndex')->name('admin.photos.all');
      Route::get('/new' , 'PhotosController@getNew')->name('admin.photos.getNew');
      Route::post('/new' , 'PhotosController@postNew')->name('admin.photos.postNew');
      Route::get('/delete/{id}' , 'PhotosController@delete')->name('admin.photos.delete');
    });
    Route::prefix('messages')->group(function(){
      Route::get('/all' , 'ContactController@getAll')->name('admin.allMessages');
    });
});
