<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontController@index')->name('home');
Route::get('/apparels', 'FrontController@apparels')->name('apparels');
Route::get('/apparel', 'FrontController@apparel')->name('apparel');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

//Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('admin/orders/{type?}', 'OrderController@Orders');
    Route::get('/contact' , 'contactController@contact')->name('contact');
    Route::get('/create' , 'createController@create')->name('create');
     Route::get('/productdetail/{id}' , 'productsController@productDetail')->name('productdetail');
   // Route::get('/destroy/{id}' , 'productsController@destroy')->name('destroy');
   Route::post('/contact','contactController@store')->name('contact.store');
//});
Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::get('CODshipping-info','CheckoutController@CODshipping')->name('checkout.CODshipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');


Route::get('test',function(){
   $orders=App\Order::find(2);
   $items=$orders->orderItems;
dd($items);
});