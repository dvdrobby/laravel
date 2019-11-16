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
    return view('index');
})->name('home');

Route::get('/products', function () {
    return view('products.products');
})->name('fashion');

Route::get('/detail', function () {
    return view('detail.detail');
})->name('detail');

Route::get('/cart', function () {
    return view('cart.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout.checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', 'HomeController@index');
