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

Route::get('/', function () {
    return view('pages.front.home.index');
});
Route::get('/about', function () {
    return view('pages.front.page.about');
})->name('about');
Route::get('/faq', function () {
    return view('pages.front.page.faq');
})->name('faq');

Route::get('/product', 'HomeController@productAll')->name('product.list');
Route::get('/product/{slug}', 'HomeController@productDetail')->name('product.detail');
Route::get('/category/{category}', 'HomeController@categoryProduct')->name('product.category');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/confirm', 'CheckoutController@confirm')->name('checkout.confirm');
Route::post('/checkout/order', 'CheckoutController@order')->name('checkout.order');

Route::get('/order/confirm', 'ConfirmController@index')->name('confirm.index');
Route::post('/order/confirm', 'ConfirmController@store')->name('confirm.store');

Route::get('/order/check', 'CheckorderController@index')->name('check.index');
Route::post('/order/check', 'CheckorderController@store')->name('check.store');
Route::get('/order/check/{id}/detail', 'CheckorderController@show')->name('check.show');

Route::get('select/city', 'CheckoutController@getCities')->name('select.city');
Route::get('select/subdistrict', 'CheckoutController@getDistrict')->name('select.subdistrict');

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('add', 'CartController@addProduct')->name('add');
    Route::put('update/{id}', 'CartController@updateProduct')->name('update');
    Route::delete('delete/{id}', 'CartController@deleteProduct')->name('delete');
    Route::get('destroy', 'CartController@destroyCart')->name('destroy');
});

Route::get('/admin', function () {
    return view('layouts.back.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::get('products/{id}/image', 'ProductsController@imageForm')->name('products.images');
    Route::post('products/{id}/image', 'ProductsController@imageUpload')->name('products.images.upload');
    Route::delete('products/{id}/image', 'ProductsController@destroyImage')->name('products.images.destroy');
    Route::resource('sliders', 'SlidersController');
    Route::resource('sponsors', 'SponsorsController');
    Route::resource('bank', 'BankController');
    Route::resource('testi', 'TestiController');
});

Route::group(['prefix' => 'table', 'as' => 'table.'], function () {
    Route::get('categories', 'CategoriesController@dataTable')->name('categories');
    Route::get('products', 'ProductsController@dataTable')->name('products');
    Route::get('sliders', 'SlidersController@dataTable')->name('sliders');
    Route::get('sponsors', 'SponsorsController@dataTable')->name('sponsors');
    Route::get('bank', 'BankController@dataTable')->name('bank');
    Route::get('testi', 'TestiController@dataTable')->name('testi');
});
