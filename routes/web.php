<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function() {
    //Index
    Route::get('', 'App\Http\Controllers\ProductController@index')->name('product.index');
    //Create
    Route::get('create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::post('store', 'App\Http\Controllers\ProductController@store' )->name('product.store');
    // Edit form, id
    Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    Route::post('update/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');
    //Delete
    Route::post('destroy/{product}', 'App\Http\Controllers\ProductController@destroy' )->name('product.destroy');
    //Show
    Route::get('show/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');

  });

  Route::prefix('product_categories')->group(function() {

        //Index
        Route::get('', 'App\Http\Controllers\ProductCategoryController@index')->name('product_category.index');
        //Create
        Route::get('create', 'App\Http\Controllers\ProductCategoryController@create')->name('product_category.create');
        Route::post('store', 'App\Http\Controllers\ProductCategoryController@store' )->name('product_category.store');
        //Edit form, id
        Route::get('edit/{product_category}', 'App\Http\Controllers\ProductCategoryController@edit')->name('product_category.edit');
        Route::post('update/{product_category}', 'App\Http\Controllers\ProductCategoryController@update')->name('product_category.update');
        //Delete
        Route::post('destroy/{product_category}', 'App\Http\Controllers\ProductCategoryController@destroy' )->name('product_category.destroy');
        //Show
        Route::get('show/{product_category}', 'App\Http\Controllers\ProductCategoryController@show')->name('product_category.show');

  });

