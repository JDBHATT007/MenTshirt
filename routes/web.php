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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TemplateController@index');

Route::get('/login', function () {
    return view ('FrontEnd.login');
});

Route::get('/register', function () {
    return view ('FrontEnd.register');
});

Route::get('/cart', function () {
    return view ('FrontEnd.cart');
});

Route::get('/wishlist', function () {
    return view ('FrontEnd.wishlist');
});

Route::get('/checkout', function () {
    return view ('FrontEnd.checkout');
});

Route::get('/account', function () {
    return view ('FrontEnd.account');
});

Route::get('/contact', function () {
    return view ('FrontEnd.contact');
});

Route::get('/productlist', function () {
    return view ('FrontEnd.productlist');
});

Route::get('/productdetail', function () {
    return view ('FrontEnd.productdetail');
});

