<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Order_datalisController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ShopController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::group(['prefix'=>'/','as'=>'endUser.','controller'=> HomeController::class ],function (){
            Route::get('/','index')->name('index');
            Route::get('category/{id}','category')->name('category');
            Route::get('productDetails/{product}','productDetails')->name('productDetails');
            Route::get('search','search')->name('search');

            Route::group(['prefix'=>'auth','as'=>'auth.','middleware'=>'guest','controller'=> AuthController::class],function (){
                Route::get('/login','login')->name('login');
                Route::post('/signIn','signIn')->name('signIn');
                Route::get('/register','register')->name('register');
                Route::post('signUp','signUp')->name('signUp');
            });
            Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');

            Route::group(['prefix'=>'cart','as','cart.','controller'=>CartController::class,'middleware'=>'auth'],function (){
                Route::post('/cart','cart')->name('cart');
                Route::get('/cartShow','cartShow')->name('cartShow');
                Route::delete('delete/{cart}','delete')->name('deleteCart');

            });
            Route::group(['prefix'=>'order','as','order.','controller'=> OrderController::class,'middleware'=>'auth'],function (){
                Route::post('/order/{cart}','order')->name('order');
                Route::get('checkOut','checkOut')->name('checkOut');
            });
            Route::group(['prefix'=>'order_detalis','as','order_detalis.','controller'=> Order_datalisController::class,'middleware'=>'auth'],function (){
                Route::post('/create','create')->name('create');
                Route::get('getOrder','getOrder')->name('getOrder');
                Route::get('invoice','invoice')->name('invoice');
            });
            Route::group(['prefix'=>'shop','as','shop.','controller'=> ShopController::class,'middleware'=>'auth'],function (){
                Route::get('shop','shop')->name('shop');
                Route::get('filter','filter')->name('filter');
            });
            Route::group(['prefix'=>'contact','as','contact.','controller'=> ContactController::class,'middleware'=>'auth'],function (){
                Route::get('index','index')->name('indexContact');
                Route::post('store','store')->name('store');
            });
        });

});
