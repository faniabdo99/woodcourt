<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/arabic-landing', 'PagesController@getArabicLanding');
Route::get('about-us' , 'PagesController@getAboutUs')->name('about');
Route::get('our-factory' , 'PagesController@getOurFactory')->name('factory');
Route::get('contact' , 'ContactController@getContact')->name('contact');
Route::post('contact-limited-edition' , 'ContactController@postLimitedEdition')->name('contactLimitedEdition');
Route::post('contact-get-quote' , 'ContactController@postQuote')->name('contactGetQuote');
Route::post('upload-product' , 'ProductController@postNew')->name('postNewProduct');
Route::get('payment-methods' , 'PagesController@getPaymentMethodsPage')->name('paymentMethods');
Route::get('privacy-policy' , 'PagesController@getPolicyPage')->name('privacy');
Route::get('expert-hub' , 'PagesController@getExpertHub')->name('expert-hub');
Route::get('test-expert-hub' , 'PagesController@getTestExpertHub')->name('test-expert-hub');
Route::prefix('products')->group(function(){
  Route::get('/{slug}' , 'ProductController@getSingle')->name('products.single');
  Route::get('/{isFiltered?}/{filter?}' , 'ProductController@getUserHome')->name('products');
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
});
Route::get('logout' , 'AuthController@Logout')->name('logout');
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
      Route::get('/localize/{id}' , 'CategoryController@getLocalize')->name('admin.category.getLocalize');
      Route::post('/localize/{id}' , 'CategoryController@postLocalize')->name('admin.category.postLocalize');
      Route::get('/delete/{id}' , 'CategoryController@delete')->name('admin.category.delete');
    });
    Route::prefix('products')->group(function(){
      Route::get('/' , 'ProductController@getIndex')->name('admin.product.all');
      Route::get('/new' , 'ProductController@getNew')->name('admin.product.getNew');
      Route::post('/new' , 'ProductController@postNew')->name('admin.product.postNew');
      Route::get('/edit/{id}' , 'ProductController@getEdit')->name('admin.product.getEdit');
      Route::post('/edit/{id}' , 'ProductController@postEdit')->name('admin.product.postEdit');
      Route::get('/localize/{id}' , 'ProductController@getLocalize')->name('admin.product.getLocalize');
      Route::post('/localize/{id}' , 'ProductController@postLocalize')->name('admin.product.postLocalize');
      Route::get('/cross-sell/{id}' , 'ProductController@getCrossSell')->name('admin.product.getCrossSell');
      Route::post('/cross-sell/{id}' , 'ProductController@postCrossSell')->name('admin.product.postCrossSell');
      Route::get('/delete/{id}' , 'ProductController@delete')->name('admin.product.delete');
      Route::get('/delete-gallery/{id}' , 'ProductController@deleteGalleryImages')->name('admin.product.deleteGalleryImages');
    });
    Route::prefix('photos')->group(function(){
      Route::get('/' , 'PhotosController@getIndex')->name('admin.photos.all');
      Route::get('/new' , 'PhotosController@getNew')->name('admin.photos.getNew');
      Route::post('/new' , 'PhotosController@postNew')->name('admin.photos.postNew');
      Route::get('/delete/{id}' , 'PhotosController@delete')->name('admin.photos.delete');
    });
    Route::get('gallery' , 'AdminController@getProducts');
    Route::get('gallery/delete/{id}' , 'AdminController@deleteGallery')->name('gallerydelete');
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

//Error Pages
Route::get('404','ErrorsController@get404Page')->name('errors.404page');
Route::get('403','ErrorsController@get403Page')->name('errors.403page');
Route::get('500','ErrorsController@get505Page')->name('errors.500page');
Route::get('vr-tour','PagesController@getVrTourPage')->name('vr-tour');

//Languge Changing
Route::get('lang/{locale}', 'PagesController@getSwitchlang')->name('switchLang');

//301 redirection
Route::get('/{slug}' , 'ProductController@getRedirectProducts');


