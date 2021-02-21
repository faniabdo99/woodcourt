<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('our-factory' , 'PagesController@getOurFactory')->name('factory');
Route::get('contact' , 'ContactController@getContact')->name('contact');
Route::post('contact-limited-edition' , 'ContactController@postLimitedEdition')->name('contactLimitedEdition');
Route::post('upload-product' , 'ProductController@postNew')->name('postNewProduct');
Route::prefix('products')->group(function(){
  Route::get('/{slug}' , 'PhotosController@getSingle')->name('products.single');
  Route::get('/{isFiltered?}/{filter?}' , 'PhotosController@getUserHome')->name('products');
});
Route::prefix('events')->group(function(){
  Route::get('/' , 'EventsController@getUserHome')->name('events');
  Route::get('/{slug}' , 'EventsController@getSingle')->name('events.single');
});
Route::prefix('blog')->group(function(){
  Route::get('/' , 'EventsController@getBlogUserHome')->name('blogs');
  Route::get('/{slug}' , 'EventsController@getBlogSingle')->name('blog.single');
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
    Route::prefix('limited')->group(function(){
      Route::get('/' , 'LimitedEditionController@getIndex')->name('admin.limited.all');
      Route::get('/new' , 'LimitedEditionController@getNew')->name('admin.limited.getNew');
      Route::post('/new' , 'LimitedEditionController@postNew')->name('admin.limited.postNew');
      Route::get('/edit/{id}' , 'LimitedEditionController@getEdit')->name('admin.limited.getEdit');
      Route::post('/edit/{id}' , 'LimitedEditionController@postEdit')->name('admin.limited.postEdit');
      Route::get('/delete/{id}' , 'LimitedEditionController@delete')->name('admin.limited.delete');
    });
    Route::prefix('messages')->group(function(){
      Route::get('/all' , 'ContactController@getAll')->name('admin.allMessages');
    });
});
Route::get('sitemap.xml', 'SitemapController@getSitemap')->name('sitemap');
//Marketing Pages Routes
Route::get('wood-flooring','MarketingController@getWoodFlooring')->name('category.wood-flooring');
Route::get('wood-flooring/engineered-floors','MarketingController@getEngineeredFloors')->name('category.wood-flooring.engineered-floors');
Route::get('wood-flooring/tiles','MarketingController@getTiles')->name('category.wood-flooring.tiles');
Route::get('wood-flooring/stairs','MarketingController@getStairs')->name('category.wood-flooring.stairs');
Route::get('wood-flooring/hdf-floors','MarketingController@getHdfFloors')->name('category.wood-flooring.hdf');
Route::get('cabinets','MarketingController@getCabinets')->name('category.cabinets');
Route::get('cabinets/kitchens','MarketingController@getKitchens')->name('category.cabinets.kitchens');
Route::get('cabinets/dressing','MarketingController@getDressings')->name('category.cabinets.dressing');
Route::get('cabinets/sink-units','MarketingController@getSinkUnits')->name('category.cabinets.sink-units');
Route::get('outdoor','MarketingController@getOutdoor')->name('category.outdoor');
Route::get('outdoor/teak-flooring','MarketingController@getTeakFlooring')->name('category.outdoor.teak-flooring');
Route::get('outdoor/shower-units','MarketingController@getShowerUnits')->name('category.outdoor.shower-units');
Route::get('outdoor/pergolas','MarketingController@getPergolas')->name('category.outdoor.pergolas');
Route::get('expert-hub' , 'PagesController@getExpertHub')->name('expert-hub');
