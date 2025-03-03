<?php

use Illuminate\Support\Facades\Route;


Route::get('product/displaygrid', 'App\Http\Controllers\productController@displaygrid')->name('products.displaygrid');


Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('scorders', App\Http\Controllers\scorderController::class);


Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);
