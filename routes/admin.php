<?php

use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GetUsersController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OredersController;
use App\Http\Controllers\Admin\ProudctController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::group(['prefix'=>'admin','as'=>'admin.','controller'=> HomeController::class , 'middleware'=>['auth','IsAdmin']],function (){
        Route::get('/','index')->name('index');
        Route::group(['prefix'=>'category','as'=>'category.','controller'=> CategoryController::class],function (){
            Route::get('/','index')->name('index');
            Route::get('create','create')->name('create');
            Route::post('store','store')->name('store');
            Route::get('edit/{category}','edit')->name('edit');
            Route::put('update/{category}','update')->name('update');
            Route::delete('delete/{category}','delete')->name('delete');
        });
        Route::group(['prefix'=>'product','as'=>'product.','controller'=> ProudctController::class],function (){
           Route::get('/',"index")->name('index');
           Route::get('create','create')->name('create');
           Route::post('store','store')->name('store');
           Route::get('edit/{product}','edit')->name('edit');
           Route::put('update/{product}','update')->name('update');
           Route::delete('delete/{product}','delete')->name('delete');
           Route::get('export','exportProduct')->name('export');
        });

        Route::group(['prefix'=>'users','as'=>'users.','controller'=> GetUsersController::class],function (){
           Route::get('/','index')->name('index');
           Route::put('pan/{user}','panUser')->name('pan');
           Route::put('ActiveUsers','ActiveUsers')->name('ActiveUsers');
           Route::put('InActiveUsers','InActiveUsers')->name('InActiveUsers');
           Route::delete('/delete/{user}','delete')->name('delete');
        });
        Route::group(['prefix'=>'ads','as'=>'ads.','controller'=> AdsController::class],function (){
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('store','store')->name('store');
            Route::get('edit/{ad}','edit')->name('edit');
            Route::put('update/{ad}','update')->name('update');
            Route::delete('delete/{ad}','delete')->name('delete');
        });
        Route::group(['prefix'=>'setting','as'=>'setting.','controller'=> SettingController::class],function (){
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('store','store')->name('store');
            Route::get('edit/{setting}','edit')->name('edit');
            Route::put('update/{setting}','update')->name('update');
            Route::delete('delete/{setting}','delete')->name('delete');
        });
        Route::group(['prefix'=>'orders' , 'as' ,'orders.','controller'=> OredersController::class],function (){
           Route::get('show','show')->name('showOrder');
           Route::delete('delete/{order}/{ord}','delete')->name('deleteOrder');
        });
        Route::group(['prefix'=>'contact' , 'as' ,'contact.','controller'=> ContactController::class],function (){
            Route::get('index','index')->name('showContact');
            Route::put('updateStatus/{contact}','updateStatus')->name('updateStatus');
            Route::delete('delete/{contact}','delete')->name('delete');
        });
    });
});
