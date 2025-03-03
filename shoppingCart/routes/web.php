<?php

use Illuminate\Support\Facades\Route;


Route::get('product/displaygrid', 'App\Http\Controllers\productController@displaygrid')->name('products.displaygrid');


Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('scorders', App\Http\Controllers\scorderController::class);


Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);

Route::get('product/additem/{id}', 'App\Http\Controllers\productController@additem')->name('products.additem');

Route::get('product/emptycart', 'App\Http\Controllers\productController@emptycart')->name('products.emptycart');

Route::get('scorders/checkout', 'App\Http\Controllers\scorderController@checkout')->name('scorders.checkout');

Route::post('scorder/placeorder', 'App\Http\Controllers\scorderController@placeorder')->name('scorders.placeorder');